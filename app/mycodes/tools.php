<?php

use App\Models\User;
use mysql_xdevapi\Exception;

class tools
{
    public function freshtoken($request): bool
    {
        $token = $request->token;
        if (!is_null($token)) {
            $codepwd = decrypt($token);
            $temp_array = explode('@', $codepwd);
            if (count($temp_array) == 2) {
                $code = $temp_array[0];
                $pwd = $temp_array[1];
                $user = User::where('usercode', $code)->get()->first();
                $newuser = User::find($user->id);
                $newuser['token'] = encrypt($user->usercode . '@' . $pwd);
                $newuser['token_outtime'] = now();
                $res = $newuser->save();
                return $res;
            }
        } else {
            return false;
        }
    }

    public function checktoken($request): array
    {
        try {
            $token = $request->token;
            if (!is_null($token)) {
                $codepwd = decrypt($token);
                $users = User::where('token', $token)->get();
                if (count($users) > 0) {
                    $temp_array = explode('@', $codepwd);
                    if (count($temp_array) == 2) {
                        $code = $temp_array[0];
                        $pwd = $temp_array[1];
                        $user = $users->first();
                        $tokentime = strtotime('+24 hours', strtotime($user->token_outtime));
                        $dif = $tokentime - time();
                        if ($dif > 0) {
                            $temp_pwd = decrypt($user->laravelpwd);
                            if ($temp_pwd == $pwd) {
                                return ['code' => 1, 'msg' => 'Token is OK'];
                            } else {
                                return ['code' => 0, 'msg' => 'Token无效'];
                            }
                        } else {
                            return ['code' => 2, 'msg' => 'Token失效，请重新获取Token值！'];
                        }
                    } else {
                        return ['code' => 0, 'msg' => 'Token无效'];
                    }
                } else {
                    return ['code' => -1, 'msg' => 'Token无效'];
                }

            } else {
                return ['code' => -2, 'msg' => 'Token不存在'];
            }
        } catch (Exception $exception) {
            throw  $exception;
        }
    }
}
