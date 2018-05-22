<?php
namespace App\Http\Controllers\Admin;

/**
 *                             _ooOoo_
 *                            o8888888o
 *                            88" . "88
 *                            (| -_- |)
 *                            O\  =  /O
 *                         ____/`---'\____
 *                       .'  \\|     |//  `.
 *                      /  \\|||  :  |||//  \
 *                     /  _||||| -:- |||||-  \
 *                     |   | \\\  -  /// |   |
 *                     | \_|  ''\---/''  |   |
 *                     \  .-\__  `-`  ___/-. /
 *                   ___`. .'  /--.--\  `. . __
 *                ."" '<  `.___\_<|>_/___.'  >'"".
 *               | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *               \  \ `-.   \_ __\ /__ _/   .-` /  /
 *          ======`-.____`-.___\_____/___.-`____.-'======
 *                             `=---='
 *          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *                     佛祖保佑        永无BUG
 *            佛曰:
 *                   写字楼里写字间，写字间里程序员；
 *                   程序人员写程序，又拿程序换酒钱。
 *                   酒醒只在网上坐，酒醉还来网下眠；
 *                   酒醉酒醒日复日，网上网下年复年。
 *                   但愿老死电脑间，不愿鞠躬老板前；
 *                   奔驰宝马贵者趣，公交自行程序员。
 *                   别人笑我忒疯癫，我笑自己命太贱；
 *                   不见满街漂亮妹，哪个归得程序员？
 *
 *            Created by PhpStorm.
 *            User: ouyangjiang
 *            Date: 2018/5/20
 *            Time: 13:11
 */

use App\Article;
use App\ArticleColumn;
use App\ArticleType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function guest()
    {
        return view('admin/guest');
    }

    private function selectArticle($type)
    {
         $res = Article::where('status','=',1)->where('article_type_id', '=', $type)->paginate(1);
         return $res;
    }
    public function index()
    {
        //$article = Article::where('status',1)->paginate(5);
        //$article = Article::where('status',1)->get();

        $article[] = self::selectArticle(1);
        $article[] = self::selectArticle(2);
        $article[] = self::selectArticle(3);
        $article[] = self::selectArticle(4);
        $article[] = Article::where('status','=',1)->paginate(1);;


        return view('admin/index/back', ['action'=>'index', 'article' => $article]);
    }

    public function add()
    {
//        $article = Article::where('status', '=',0)->get();
        $article = Article::where('status', '=',0)->paginate(1);
        $articleType   = ArticleType::all();
        $articleColumn = ArticleColumn::all();

        return view('admin/index/add', [
            'action'        =>'add',
            'article'      => $article,
            'articleType'   => $articleType,
            'articleColumn' => $articleColumn]);
    }

    public function fabu(Request $request)
    {
        if($request->ajax()) {
            //$data = $request->input('abstract');
            $article                    = new Article;
            //$imgPath                    = 'uploads/' . self::uploadImages($request);
            var_dump($request);die;
            $article->title             = $request->title;
            $article->abstract          = $request->abstract;
            $article->banner_img        = $imgPath;
            $article->content           = $request->content;
            $article->status            = 1;
            $article->article_type_id   = $request->zhuti;
            $article->article_column_id = $request->lanmu;
            //$article->created_at = time();
            //$article->updated_at = time();

            if ($article->save())
             return self::json(200, '发布成功', []);
            else {
                return self::json(0, '发布失败', []);
            }
        }
        return self::json(0, '请求方式不正确', []);
    }

    public function caogao(Request $request)
    {
        if($request->ajax()) {
            //$data = $request->input('abstract');
            $article = new Article;
            $imgPath = 'uploads/' . self::uploadImages($request);
            var_dump($imgPath);die;
            $article->title = $request->title;
            $article->abstract = $request->abstract;
            $article->banner_img = $imgPath;
            $article->content = $request->content;
            $article->article_type_id = $request->zhuti;
            $article->article_column_id = $request->lanmu;
            //$article->created_at = time();
            //$article->updated_at = time();

            if ($article->save())
                return self::json(200, '已经保存为草稿', []);
            else {
                return self::json(0, '保存为草稿失败', []);
            }
        }
        return self::json(0, '请求方式不正确', []);
    }

    public static function json($code, $msg= '', $data = [])
    {
        $response = ['code' => $code, 'msg'=> $msg, 'data' => $data];
        header('Content-type: application/json;charset=utf-8');
        echo(json_encode($response, JSON_UNESCAPED_UNICODE)); //unicode不转码
        exit;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function test(Request $request)
    {
        /*'title' => null
          'zhuti' => string '1' (length=1)
          'lanmu' => string '1' (length=1)
          'content' => string '<h1>Heading</h1>' (length=16)

          `title` varchar(64) NOT NULL DEFAULT '' COMMENT '文章标题',
          `abstract` varchar(128) NOT NULL DEFAULT '' COMMENT '简介',
          `banner_img` varchar(256) NOT NULL DEFAULT '' COMMENT '文章首页展示的图片',
          `content` text NOT NULL COMMENT '文章内容',
          `article_type_id` int(11) NOT NULL DEFAULT '1' COMMENT '文章主题',
          `article_column_id` int(11) NOT NULL DEFAULT '1' COMMENT '文章栏目',
          `thumbs_up` int(11) NOT NULL DEFAULT '0' COMMENT '文章点赞数',
          `favorite` int(11) NOT NULL DEFAULT '0' COMMENT '文章收藏数
         * */

        $allData = $request->all();
        $article                    = new Article;
        $imgPath                    = 'uploads/' . self::uploadImages($request);
        $article->title             = $allData['title'];
        $article->abstract          = $allData['abstract'];
        $article->banner_img        = $imgPath;
        $article->content           = $allData['content'];
        $article->status           = $allData['status'];
        $article->article_type_id   = $allData['zhuti'];
        $article->article_column_id = $allData['lanmu'];
        //$article->created_at = time();
        //$article->updated_at = time();

        $article->save();

        return redirect('admin/index');
    }

    public function uploadImages($request)
    {
        $file = $request->file('img')->store('images', 'uploads');
        return $file;//substr($file, 7);
    }
}
