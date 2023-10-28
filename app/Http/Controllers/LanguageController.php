<?php
/**
 * Class LanguageController.
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;

/**
 * Class LanguageController
 *
 */
class LanguageController extends Controller
{
    /**
     * Defining scope of variable
     *
     * @access public
     * @var    array $language
     */
    protected $language;

    /**
     * Create a new controller instance.
     *
     * @param instance $language instance
     *
     * @return void
     */
    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $langs = $this->language::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            $pagination = $langs->appends(
                array(
                    'keyword' => Input::get('keyword')
                )
            );
        } else {
            $langs = $this->language->paginate(10);
        }
        return View::make(
            'back-end.admin.languages.index',
            compact('langs')
        );
    }

    /**
     * Store a newly created languages
     *
     * @param string $request string
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'language_title' => 'required',
            ]
        );
        $this->language->saveLanguages($request);
        Session::flash('message', trans('lang.save_language'));
        return Redirect::back();
    }

    /**
     * Edit Languages.
     *
     * @param int $id integer
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!empty($id)) {
            $langs = $this->language::find($id);
            if (!empty($langs)) {
                return View::make(
                    'back-end.admin.languages.edit', compact('id', 'langs')
                );
                Session::flash('message', trans('lang.lang_updated'));
                return Redirect::to('admin/languages');
            }
        }
    }

    /**
     * Update language.
     *
     * @param string $request string
     * @param int    $id      integer
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'language_title' => 'required',
            ]
        );
        $this->language->updateLanguage($request, $id);
        Session::flash('message', trans('lang.lang_updated'));
        return Redirect::to('admin/languages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $json = array();
        $id = $request['id'];
        if (!empty($id)) {
            $this->language::where('id', $id)->delete();
            $json['type'] = 'success';
            $json['message'] = trans('lang.lang_deleted');
            return $json;
        }
    }
}