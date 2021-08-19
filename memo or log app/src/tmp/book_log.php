<?php

//読書ログを登録
function createLog()
{
    echo '読書ログを登録してください', PHP_EOL;
    echo '書籍名:';
    $title = trim(fgets(STDIN)) . PHP_EOL;
    echo '著者名:';
    $AuthorName = trim(fgets(STDIN)) . PHP_EOL;
    echo '読書状況（未読,読んでる,読了）';
    $select = trim(fgets(STDIN)) . PHP_EOL;
    echo '評価（5点満点の整数）:';
    $evaluation = trim(fgets(STDIN)) . PHP_EOL;
    echo '感想:';
    $thoughts = trim(fgets(STDIN)) . PHP_EOL;

    echo '読書ログを登録しました。' . PHP_EOL . PHP_EOL;
    //配列へ登録する処理
    return  [
        'title' => $title,
        'AuthorName' => $AuthorName,
        'select' => $select,
        'evaluation' => $evaluation,
        'thoughts' => $thoughts
    ];
}
//ログの配列


function logDisplay($books)
{
    //読書ログを表示
    foreach ($books as $bookinfo) {
        echo '読書ログを表示します' . PHP_EOL;
        echo "書籍名:" . $bookinfo['title'] . PHP_EOL;
        echo "著者名:" . $bookinfo['AuthorName'] . PHP_EOL;
        echo "読書状況:" . $bookinfo['select'] . PHP_EOL;
        echo "評価:" . $bookinfo['evaluation'] . PHP_EOL;
        echo "感想:" . $bookinfo['thoughts'] . PHP_EOL;
        echo '-------------' . PHP_EOL;
    };
};
$books = [];
while (true) {
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください (1,2,9):';
    $num = trim(fgets(STDIN));
    if ($num === '1') {
        $books[] = createLog();
    } elseif ($num === '2') {
        logDisplay($books);
    } elseif ($num === '9') {
        break;
    }
}
    
    // echo "書籍名: 銀河鉄道の夜" . PHP_EOL;
    // echo "著者名: 宮沢賢治" . PHP_EOL;
    // echo "読書状況: 読了" . PHP_EOL;
    // echo "評価: " . 5 . PHP_EOL;
    // echo "感想: 本当の幸せはなんだろうかと考えさせられる作品だった。" . PHP_EOL;
