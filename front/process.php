<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // SQL Server 연결 설정
    $serverName = "dbdbdip.database.windows.net";
    $connectionOptions = array(
        "Database" => "dbo.Married",
        "Uid" => "bigbell999",
        "PWD" => "Bb513792486!"
    );
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // HTML 폼 데이터 가져오기
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $job = $_POST['job'];
    $marital = $_POST['marital'];
    $income = $_POST['income'];

    // SQL 쿼리 실행
    $sql = "INSERT INTO 테이블명 (gender, age, education, job, marital, income) VALUES (?, ?, ?, ?, ?, ?)";
    $params = array($gender, $age, $education, $job, $marital, $income);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    echo "데이터가 성공적으로 저장되었습니다.";

    // 연결 종료
    sqlsrv_close($conn);
}
?>
