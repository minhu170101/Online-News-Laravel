<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\comment;
use Illuminate\Support\Facades\Hash;
use App\Models\post;

class frontController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        $newest = DB::table('posts')->where('status','publish')->orderby('created_at','DESC')->get();
        $life = DB::table('posts')->where('category_id','LIKE','%1%')->orderby('created_at','DESC')->get();
        $travel = DB::table('posts')->where('category_id','LIKE','%2%')->orderby('created_at','DESC')->get();
        $world = DB::table('posts')->where('category_id','LIKE','%3%')->orderby('created_at','DESC')->get();
        $sport = DB::table('posts')->where('category_id','LIKE','%4%')->orderby('created_at','DESC')->get();
        $tech = DB::table('posts')->where('category_id','LIKE','%5%')->orderby('created_at','DESC')->get();
        $trend = DB::table('posts')->where('status','publish')->orderby('view','DESC')->paginate(6);
        $random = DB::table('posts')->where('status','publish')->inRandomOrder()->paginate(8);


        foreach($newest as $new){
            $categories = explode(',',$new->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $new->category_id = $postcat;
            $postcategories = [];
        }

        foreach($life as $lf){
            $categories = explode(',',$lf->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $lf->category_id = $postcat;
            $postcategories = [];
        }

        foreach($travel as $tv){
            $categories = explode(',',$tv->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $tv->category_id = $postcat;
            $postcategories = [];
        }

        foreach($world as $w){
            $categories = explode(',',$w->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $w->category_id = $postcat;
            $postcategories = [];
        }

        foreach($sport as $s){
            $categories = explode(',',$s->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $s->category_id = $postcat;
            $postcategories = [];
        }

        foreach($tech as $t){
            $categories = explode(',',$t->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $t->category_id = $postcat;
            $postcategories = [];
        }

        

        return view ('frontend.index',['newest'=>$newest,'life'=>$life,'travel'=>$travel,'world'=>$world,'sport'=>$sport,'tech'=>$tech,'trend'=>$trend,'random'=>$random,'categories'=>$categories]);
    }

    public function category(){
        $categories = DB::table('categories')->get();
        $newest = DB::table('posts')->where('status','publish')->orderby('created_at','DESC')->get();
        $life = DB::table('posts')->where('category_id','LIKE','%1%')->orderby('created_at','DESC')->get();
        $travel = DB::table('posts')->where('category_id','LIKE','%2%')->orderby('created_at','DESC')->get();
        $world = DB::table('posts')->where('category_id','LIKE','%3%')->orderby('created_at','DESC')->get();
        $sport = DB::table('posts')->where('category_id','LIKE','%4%')->orderby('created_at','DESC')->get();
        $tech = DB::table('posts')->where('category_id','LIKE','%5%')->orderby('created_at','DESC')->get();
        $trend = DB::table('posts')->where('status','publish')->orderby('view','DESC')->paginate(6);
        $random = DB::table('posts')->where('status','publish')->inRandomOrder()->paginate(8);


        foreach($newest as $new){
            $categories = explode(',',$new->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $new->category_id = $postcat;
            $postcategories = [];
        }

        foreach($life as $lf){
            $categories = explode(',',$lf->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $lf->category_id = $postcat;
            $postcategories = [];
        }

        foreach($travel as $tv){
            $categories = explode(',',$tv->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $tv->category_id = $postcat;
            $postcategories = [];
        }

        foreach($world as $w){
            $categories = explode(',',$w->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $w->category_id = $postcat;
            $postcategories = [];
        }

        foreach($sport as $s){
            $categories = explode(',',$s->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $s->category_id = $postcat;
            $postcategories = [];
        }

        foreach($tech as $t){
            $categories = explode(',',$t->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $t->category_id = $postcat;
            $postcategories = [];
        }

        foreach($random as $rand){
            $categories = explode(',',$rand->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $rand->category_id = $postcat;
            $postcategories = [];
        }

        

        return view ('frontend.category',['newest'=>$newest,'life'=>$life,'travel'=>$travel,'world'=>$world,'sport'=>$sport,'tech'=>$tech,'trend'=>$trend,'random'=>$random,'categories'=>$categories]);
    }

    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();
        $related = DB::table('posts')->where('category_id','LIKE','%'.$data->category_id.'%')->inRandomOrder()->get();
        $random = DB::table('posts')->inRandomOrder()->get();
        $cmt = DB::table('comments')->where('pid',$data->pid)->get();

        foreach($random as $rand){
            $categories = explode(',',$rand->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $rand->category_id = $postcat;
            $postcategories = [];
        }
        DB::table('posts')->where('slug',$slug)->increment('view');

        return view ('frontend.article',['data'=>$data,'related'=>$related,'random'=>$random,'cmt'=>$cmt]);
    }

    public function postComment(Request $request){
        $comment = new comment;
        $comment->pid = $request->pid;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->cmt = $request->cmt;
        $comment->save();

        return redirect()->back();
    }

    public function search(){
        $categories = DB::table('categories')->get();
        $random = DB::table('posts')->where('status','publish')->inRandomOrder()->paginate(8);

        $key = $_GET['key'];
        $post = DB::table('posts')->where('title','LIKE','%'.$key.'%')->get();

        foreach($random as $rand){
            $categories = explode(',',$rand->category_id);
            foreach($categories as $cat){
                $postcat = DB::table('categories')->where('cid',$cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ',$postcategories);
            }
            $rand->category_id = $postcat;
            $postcategories = [];
        }

        

        return view ('frontend.search',['post'=>$post,'random'=>$random]);
    }

}
