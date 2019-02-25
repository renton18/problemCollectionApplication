<?php

namespace App\Admin\Controllers;

use App\Models\problem;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class problem2Controller extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new problem);

        $grid->id('Id');
        $grid->problemId('ProblemId');
        $grid->problemUpdateTime('ProblemUpdateTime');
        $grid->problemCategory('ProblemCategory');
        $grid->problemTitle('ProblemTitle');
        $grid->selectItem1('SelectItem1');
        $grid->selectItem2('SelectItem2');
        $grid->selectItem3('SelectItem3');
        $grid->selectItem4('SelectItem4');
        $grid->selectItem5('SelectItem5');
        $grid->selectItem6('SelectItem6');
        $grid->memo('Memo');
        $grid->yesNoProblemFlag('YesNoProblemFlag');
        $grid->explainId('ExplainId');
        $grid->deleted_at('Deleted at');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(problem::findOrFail($id));

        $show->id('Id');
        $show->problemId('ProblemId');
        $show->problemUpdateTime('ProblemUpdateTime');
        $show->problemCategory('ProblemCategory');
        $show->problemTitle('ProblemTitle');
        $show->selectItem1('SelectItem1');
        $show->selectItem2('SelectItem2');
        $show->selectItem3('SelectItem3');
        $show->selectItem4('SelectItem4');
        $show->selectItem5('SelectItem5');
        $show->selectItem6('SelectItem6');
        $show->memo('Memo');
        $show->yesNoProblemFlag('YesNoProblemFlag');
        $show->explainId('ExplainId');
        $show->deleted_at('Deleted at');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new problem);

        $form->text('problemId', 'ProblemId');
        $form->datetime('problemUpdateTime', 'ProblemUpdateTime')->default(date('Y-m-d H:i:s'));
        $form->text('problemCategory', 'ProblemCategory');
        $form->textarea('problemTitle', 'ProblemTitle');
        $form->textarea('selectItem1', 'SelectItem1');
        $form->textarea('selectItem2', 'SelectItem2');
        $form->textarea('selectItem3', 'SelectItem3');
        $form->textarea('selectItem4', 'SelectItem4');
        $form->textarea('selectItem5', 'SelectItem5');
        $form->textarea('selectItem6', 'SelectItem6');
        $form->textarea('memo', 'Memo');
        $form->switch('yesNoProblemFlag', 'YesNoProblemFlag');
        $form->number('explainId', 'ExplainId');

        return $form;
    }
}
