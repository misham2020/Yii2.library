<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\Material;
use app\models\MaterialSearch;
use app\models\Type;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaterialController implements the CRUD actions for Material model.
 */
class MaterialController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST', 'GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Material models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaterialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model =  Material::find()->all();


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Material model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Material model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Material();
        $models =  Material::find()->all();
        $cat = new Category();
        $cat = $cat::find()->all();
        $type = new Type();
        $type = $type::find()->all();
        return $this->render('create', [
            'model' => $model, 'models' => $models, 'type' => $type, 'cat' => $cat
        ]);
    }

    public function actionStore()
    {
        $model = new Material();
        $request = Yii::$app->request;
        $model->name = $request->post('name');
        $model->author = $request->post('author');
        $model->description = $request->post('description');
        $model->category_id = $request->post('category');
        $model->type_id = $request->post('type');
        $model->save();
        return $this->redirect(['index']);
    }
    /**
     * Updates an existing Material model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Material model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Material model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Material the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Material::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSearhes()
    {
        $search = Yii::$app->request->get('search');
        if (!$search) {
            return $this->render('searches');
        }
        $query = Material::find();
        $query->orFilterWhere(['like', 'name', $search])
            ->orFilterWhere(['like', 'author', $search])
            ->orFilterWhere(['like', 'description', $search])
            ->orFilterWhere(['like', 'category_id', $search])
            ->orFilterWhere(['like', 'type_id', $search])
            ->orFilterWhere(['like', 'id', $search]);


        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('searches', compact('model', 'pages', 'search'));
    }
}
