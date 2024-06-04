<!DOCTYPE html>
<html>
<head>
    <title>Textarea File Editor</title>
</head>
<body>

<?php
$filename = "index.txt";

// 当页面加载时，读取 index.txt 文件的内容
$file_content = "";
if (file_exists($filename)) {
    $file_content = file_get_contents($filename);
}

// 当用户提交表单时，将 textarea 中的内容写入 index.txt 文件
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_content = $_POST["content"];
    file_put_contents($filename, $new_content);
    // 更新文件内容
    $file_content = $new_content;
    echo "<p>文件已更新。</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <textarea id="content" name="content" rows="10" cols="50"><?php echo htmlspecialchars($file_content);?></textarea><br>
</form>

<script>
    // 监听 textarea 内容变化事件
    document.getElementById("content").addEventListener("input", function() {
        var content = this.value;
        // 使用 Ajax 将内容发送给 PHP 文件，以便写入到 index.txt 中
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log("内容已更新。");
            }
        };
        xhr.send("content=" + encodeURIComponent(content));
    });
</script>

</body>
</html>
