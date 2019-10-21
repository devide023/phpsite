<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->default(1)->comment('状态');
            $table->string('usercode',10)->unique()->comment('用户编号');
            $table->string('username',50)->nullable()->comment('用户名称');
            $table->string('userpwd',500)->nullable()->comment('用户密码');
            $table->string('headimg',1000)->nullable()->comment('用户头像url');
            $table->string('tel',50)->nullable()->comment('移动电话');
            $table->string('phone',50)->nullable()->comment('电话');
            $table->string('address',1000)->nullable()->comment('通讯地址');
            $table->date('birthdate')->nullable()->comment('出生日期');
            $table->integer('sex')->default(1)->comment('性别，1：男，2女');
            $table->timestamp('addtime')->nullable()->comment('添加日期');
        });
        Schema::create('role',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('status')->default(1);
            $table->string('title',100)->nullable()->comment('角色名称');
            $table->string('note',500)->nullable()->comment('备注');
            $table->timestamp('addtime')->nullable()->comment('录入日期');
        });
        Schema::create('user_role',function (Blueprint $table){
            $table->increments('id');
            $table->integer('userid');
            $table->integer('roleid');
        });
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pid')->comment('父id');
            $table->integer('status')->default(1)->comment('状态');
            $table->string('menucode',10)->unique()->comment('菜单编码');
            $table->string('title',100)->nullable()->comment('菜单名称');
            $table->string('path',500)->nullable()->comment('路由');
            $table->string('icon',100)->nullable()->comment('图标');
            $table->string('menutype',50)->nullable()->comment('菜单类型');
            $table->string('note',500)->nullable()->comment('备注');
            $table->timestamp('addtime')->nullable()->comment('录入日期');
        });
        Schema::create('role_menu',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('roleid');
            $table->bigInteger('menuid');
        });
        Schema::create('organize',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('pid')->default(0)->comment('父节点');
            $table->string('title',500)->nullable()->comment('节点名称');
            $table->string('nodecode',50)->nullable()->comment('节点编码');
            $table->integer('status')->default(1)->comment('状态');
            $table->string('nodetype',100)->nullable()->comment('节点类型');
            $table->timestamp('addtime')->nullable()->comment('录入日期');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('role');
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('menu');
        Schema::dropIfExists('role_menu');
        Schema::dropIfExists('organize');
    }
}
