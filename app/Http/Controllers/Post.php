<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_model;
class Post extends Controller
{
	public function index(Post $post){//インポートしたPostをインスタンス化して$postとして使用。

		return $post->get();//$postの中身を戻り値にする。
	}	//
}
