<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/8/30
 * Time: 21:14
 */
namespace App\Http\Controllers\AboutMe;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\View ;

use Redirect, Input, Auth;

class AboutHowController extends Controller {

    //跳转至添加页面
    public function create () {
        return view('aboutme.abouthow.create');
    }


    //添加
    public function store (Request $request) {
        $this->validate($request, [
            'view_title' => 'required|unique:pages|max:255',
            'view_introduction' => 'required',
            'view_content' => 'required',
        ]);

        $set = new View;
        $set->view_title = Input::get('view_title');
        $set->view_body = Input::get('view_introduction');
        $set->view_content = Input::get('viiew_content') ;
        $set->user_name = Auth::user()->name;

        if ($set->save()) {
            return Redirect::to('aboutme');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    //跳转至修改页面

    public function edit($id)
    {
        return view('aboutme.abouthow.edit')->withView(View::find($id));
    }


    //修改 , 使用每一个的id来定位
    public function update (Request $request , $id)
    {
        $this->validate($request, [
            'view_title' => 'required|unique:pages|max:255',
            'view_introduction' => 'required',
            'view_content' => 'required',
        ]);

        $set = View::find($id);
        $set->view_title = Input::get('view_title');
        $set->view_introduction = Input::get('view_introduction');
        $set->view_content = Input::get('viiew_content') ;
        $set->user_name = Auth::user()->name;

        if ($set->save()) {
            return Redirect::to('aboutme');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    //删除
    public function destroy($id)
    {
        $page = View::find($id);
        $page->delete();

        return Redirect::to('aboutme');
    }

}
