<!-- Thay vì dùng 1 interface xử lý nhiều class, ta nên tách thành nhiều interface nhỏ với mục đích cụ thể -->
<!-- No client should be forced to depend on methods it doesn't use-->
<!-- No class should be forced to implement an interface that contractually binds that class to have a method it will never uses -->
<?php
interface File{
    public function parse();
}
interface Html{
    public function htmlContent();
}
class JsonFile implements File{
    public function parse(){
        //
    }
}
class HtmlFile implements Html{
    public function htmlContent(){
        //
    }
}
?>