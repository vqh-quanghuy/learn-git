<!-- Các class con có thể thay thế các đối tượng ở class cha mà không gây ra lỗi -->
<?php
class ParentClass{
    public $id;
    public function setId(int $id):void{
        $this->id = $id;
    }
}
class ChildClass{
    public $id;
    public function setId(int $id):void{
        $this->id=$id;
    }
}
?>