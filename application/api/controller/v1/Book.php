<?php
/**
 * Created by PhpStorm.
 * User: 沁塵
 * Date: 2019/4/20
 * Time: 19:57
 */

namespace app\api\controller\v1;

use app\api\model\Book as BookModel;
use think\Request;

class Book
{
    /**
     * 查询指定bid的图书
     * @param $bid
     * @return mixed
     */
    public function getBook($bid)
    {
        $result = BookModel::get($bid);
        return $result;
    }

    /**
     * 查询所有图书
     * @return mixed
     */
    public function getBooks()
    {
        $result = BookModel::all();
        return $result;
    }

    /**
     * 搜索图书
     */
    public function search()
    {

    }

    /**
     * 新建图书
     * @param Request $request
     * @return \think\response\Json
     */
    public function create(Request $request)
    {
        $params = $request->post();
        BookModel::create($params);
        return writeJson(201, '', '新建图书成功');
    }

    public function update(Request $request)
    {
        $params = $request->put();
        $bookModel = new BookModel();
        $bookModel->save($params, ['id' => $params['id']]);
        return writeJson(201, '', '更新图书成功');
    }

    /**
     * @auth('删除图书','图书')
     * @param $bid
     * @return \think\response\Json
     */
    public function delete($bid)
    {
        BookModel::destroy($bid);
        return writeJson(201, '', '删除图书成功');

    }
}