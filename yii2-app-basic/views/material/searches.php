<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
?>

<body>
<div class="main-wrapper">
    <div class="content">
        <div class="container">
            <h1 class="my-md-5 my-4">Поиск</h1>
            <p>
        <?php echo Html::a('Добавить', ['create'], ['class' => 'btn btn-primary mb-4']) ?>
        <?php echo Html::a('На главную', ['index'], ['class' => 'btn btn-primary mb-4']) ?>
    </p>
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Категория</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php  foreach($model as $item) { ?>
                    <tr>
                        <td><a href="<?php echo \yii\helpers\Url::to(['material/view', 'id' => $item->id]) ?>"><?=$item->name?></a></td>
                        <td><?php echo $item->author?></td>
                        <td><?php echo $item->category->name;?></td>
                        <td><?php echo $item->type->name?></td>
                        <td class="text-nowrap text-end">
                            <a href="<?php echo \yii\helpers\Url::to(['material/update', 'id' => $item->id]) ?>" class="text-decoration-none me-2 " >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-pencil"  viewBox="0 0 16 16" >
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                            <a href="<?php echo \yii\helpers\Url::to(['material/delete', 'id' => $item->id]) ?>" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
    <footer class="footer py-4 mt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-muted">Test</div>
            </div>
        </div>
    </footer>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

</body>
</html>