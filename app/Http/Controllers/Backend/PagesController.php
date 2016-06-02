<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
class PagesController extends Controller
{
    protected $pages;

    public function __construct(Page $pages)
    {
        $this->pages = $pages;

        parent::__construct();
    }

    public function index() {
        $pages = $this->pages->all();
        return view('backend.pages.index', compact('pages'));
    }

    public function create(Page $page) {
        $templates = $this->getPageTemplates();
        return view('backend.pages.form', compact('page', 'templates'));
    }

    public function store(Requests\StorePageRequest $request) {
        $this->pages->create($request->only('title', 'uri', 'name', 'content', 'template'));
        return redirect(route('backend.pages.index'))->with('status', 'Create Page Success');
    }

    public function edit($id) {
        $page = $this->pages->findOrFail($id);
        $templates = $this->getPageTemplates();
        return view('backend.pages.form', compact('page'), 'templates');
    }

    public function update(Requests\UpdatePageRequest $request, $id) {
        $page = $this->pages->findOrFail($id);
        $page->fill($request->only('title', 'uri', 'name', 'content', 'template'))->save();
        return redirect(route('backend.pages.index', $page->id))->with('status', 'Update Success');
    }

    public function confirm($id) {
        $page = $this->pages->findOrFail($id);
        return view('backend.pages.confirm', compact('page'));
    }

    public function destroy($id) {
        $page = $this->pages->findOrFail($id);
        $page->delete();
        return redirect(route('backend.pages.index'))->with('status', 'Delete Success');
    }

    protected  function getPageTemplates() {
        $templates = config('cms.templates');
        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }
}
