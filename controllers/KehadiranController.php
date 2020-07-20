<?php

namespace app\controllers;

use Yii;
use app\models\Kehadiran;
use app\models\KehadiranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KehadiranController implements the CRUD actions for Kehadiran model.
 */
class KehadiranController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kehadiran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KehadiranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kehadiran model.
     * @param integer $mahasiswa_NIM
     * @param integer $mata_kuliah_kodemk
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mahasiswa_NIM, $mata_kuliah_kodemk)
    {
        return $this->render('view', [
            'model' => $this->findModel($mahasiswa_NIM, $mata_kuliah_kodemk),
        ]);
    }

    /**
     * Creates a new Kehadiran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kehadiran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mahasiswa_NIM' => $model->mahasiswa_NIM, 'mata_kuliah_kodemk' => $model->mata_kuliah_kodemk]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kehadiran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mahasiswa_NIM
     * @param integer $mata_kuliah_kodemk
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mahasiswa_NIM, $mata_kuliah_kodemk)
    {
        $model = $this->findModel($mahasiswa_NIM, $mata_kuliah_kodemk);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mahasiswa_NIM' => $model->mahasiswa_NIM, 'mata_kuliah_kodemk' => $model->mata_kuliah_kodemk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kehadiran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mahasiswa_NIM
     * @param integer $mata_kuliah_kodemk
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mahasiswa_NIM, $mata_kuliah_kodemk)
    {
        $this->findModel($mahasiswa_NIM, $mata_kuliah_kodemk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kehadiran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mahasiswa_NIM
     * @param integer $mata_kuliah_kodemk
     * @return Kehadiran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mahasiswa_NIM, $mata_kuliah_kodemk)
    {
        if (($model = Kehadiran::findOne(['mahasiswa_NIM' => $mahasiswa_NIM, 'mata_kuliah_kodemk' => $mata_kuliah_kodemk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
