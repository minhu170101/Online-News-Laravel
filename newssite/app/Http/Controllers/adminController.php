<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use DB;
use Session;
use Auth;

class adminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view ('backend.index');
    }

    public function viewcategory(){
        $data = DB::table('categories')->GET();
        return view ('backend.categories.category',['data'=>$data]);
    }

    public function editcategory($id) {
        $singledata = DB::table('categories')->where('cid',$id)->first();
        if($singledata == NULL){
            return redirect('viewcategory');
        }
        $data = DB::table('categories')->GET();
        return view ('backend.categories.editcategory',['data'=>$data,'singledata'=>$singledata]);
    }

    public function multipleDelete() {
        $data = Request::except('_token');
        if($data['bulk-action'] == 0) {
            session::flash('message','Xin hãy chọn thao tác');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])) {
            session::flash('message','Xin hãy chọn chủ đề cần xóa');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach($ids as $id){
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Xóa thành công');
        return redirect()->back();
    }

    public function addPost(){
        $categories = DB::table('categories')->get();

        return view('backend.posts.add-post',['categories'=>$categories]);
    }

    public function allPosts(){
        $posts = DB::table('posts')->orderby('pid','DESC')->paginate(12);
        foreach($posts as $post){
            $categories = explode(',',$post->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $post->category_id = $postcat;
            $postcategories = [];
        }
        $published = DB::table('posts')->where('status','publish')->count();
        $allposts = DB::table('posts')->count();
        return view('backend.posts.all-posts',['posts'=>$posts,'published'=>$published,'allposts'=>$allposts]);
    }

    public function editPost($id){
        $data = DB::table('posts')->where('pid',$id)->first();
        $postcat = explode(',',$data->category_id);
        $categories = DB::table('categories')->get();
        return view('backend.posts.edit',['data'=>$data,'categories'=>$categories,'postcat'=>$postcat]);
    }

    public function allUsers(){
        $users = DB::table('users')->orderby('created_at','DESC')->paginate(12);
        $allusers = DB::table('users')->count();
        return view('backend.users.all-users',['users'=>$users,'allusers'=>$allusers]);
    }

    public function allCmts(){
        $cmts = DB::table('comments')->orderby('created_at','DESC')->paginate(12);
        $allcmts = DB::table('comments')->count();

        foreach($cmts as $cmt){
            $posts = explode(',',$cmt->pid);
            foreach($posts as $post){
                $postcat = DB::table('posts')->where('pid',$post)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $cmt->pid = $postcat;
            $postcategories = [];
        }
        return view('backend.comments.all-comments',['cmts'=>$cmts,'allcmts'=>$allcmts]);
    }
}
