<?php
namespace App\Http\Controllers;

use App\Article;
use App\ArticleColumn;
use App\Favorite;
use App\ThumbsUp;
use App\User;
use Illuminate\Http\Request;

class Test extends Controller
{
    /**
     * 中间件验证是否登录
     *
     * PaperController constructor.
     */
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = $request->user();

            return $next($request);
        });
    }

    public function index()
    {
        //$user = new User;
        //$res = $user::all();
        //dd($res);
        $articles = Article::all();
        return view('test/index', ['articles' => $articles]);
    }

    public function menu1($type='all')
    {
        $articles = Article::where('article_type_id', '=', 1)->get(); //取出'软件使用'的文章
        $articleColumns = ArticleColumn::where('article_type_id', '=', 1)->get();
        $columnId = [];
        foreach ($articles as $article) {
            $columnId[$article->article_column_id] = $article->article_column_id;
        }

        return view('test/menu-01', [
            'type' => $type,
            'articles' => $articles,
            'articleColumns' => $articleColumns,
            'columnId' => $columnId,
        ]);
    }

    public function menu2($type='all')
    {
        $articles = Article::where('article_type_id', '=', 2)->get(); //取出'软件使用'的文章
        $articleColumns = ArticleColumn::where('article_type_id', '=', 2)->get();
        $columnId = [];
        foreach ($articles as $article) {
            $columnId[$article->article_column_id] = $article->article_column_id;
        }

        return view('test/menu-02', [
            'type' => $type,
            'articles' => $articles,
            'articleColumns' => $articleColumns,
            'columnId' => $columnId,
        ]);
    }

    public function menu3($type='all')
    {
        $articles = Article::where('article_type_id', '=', 3)->get(); //取出'软件使用'的文章
        $articleColumns = ArticleColumn::where('article_type_id', '=', 3)->get();
        $columnId = [];
        foreach ($articles as $article) {
            $columnId[$article->article_column_id] = $article->article_column_id;
        }

        return view('test/menu-03', [
            'type' => $type,
            'articles' => $articles,
            'articleColumns' => $articleColumns,
            'columnId' => $columnId,
        ]);
    }

    public function menu4($type='all')
    {
        $articles = Article::where('article_type_id', '=', 4)->get(); //取出'软件使用'的文章
        $articleColumns = ArticleColumn::where('article_type_id', '=', 4)->get();
        $columnId = [];
        foreach ($articles as $article) {
            $columnId[$article->article_column_id] = $article->article_column_id;
        }

        return view('test/menu-04', [
            'type' => $type,
            'articles' => $articles,
            'articleColumns' => $articleColumns,
            'columnId' => $columnId,
        ]);
    }

    public function person()
    {
        return view('test/person', ['user'=>$this->user]);
    }

    public function login()
    {
        return view('test/login');
    }

    public function register()
    {
        return view('test/register');
    }

    public function article($id)
    {
        $article = Article::where('id', '=', $id)->first();
        return view('test/article', ['article' => $article]);
    }

    public function follow()
    {
        return view('test/follow');
    }

    /**
     * 点赞
    */
    public function favor(Request $request)
    {
        $id                 = $request->data;
        $article            = Article::where('id', '=', $id)->first();
        $article->thumbs_up = $article->thumbs_up + 1;
        $article->save();

        $thumbsUp = new ThumbsUp();
        $thumbsUp->article_id = $id;
        $thumbsUp->user_id = $this->user->id;
        $thumbsUp->save();

        self::json(200, 'success', []);
    }

    /**
     * 收藏
    */
    public function favorite(Request $request)
    {
        $id = $request->data;
        $article = Article::where('id','=', $id)->first();
        $article->favorite = $article->favorite + 1;
        $article->save();

        $favorite = new Favorite();
        $favorite->article_id = $id;
        $favorite->user_id = $this->user->id;
        $favorite->save();

        self::json(200, 'success', []);
    }

    /**
     * 取消收藏
    */
    public function favoriteCancel(Request $request)
    {
        $id = $request->data;
        $article = Article::where('id','=', $id)->first();
        $article->favorite = $article->favorite - 1;
        $article->save();

        Favorite::where('article_id','=',$id)->where('user_id','=',$this->user->id)->delete();


        self::json(200, 'success', []);
    }

    /**
     * ajax请求时返回json
     * */
    public static function json($code, $msg= '', $data = [])
    {
        $response = ['code' => $code, 'msg'=> $msg, 'data' => $data];
        header('Content-type: application/json;charset=utf-8');
        echo(json_encode($response, JSON_UNESCAPED_UNICODE)); //unicode不转码
        exit;
    }
}
