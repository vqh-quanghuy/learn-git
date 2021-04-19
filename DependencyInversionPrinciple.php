<!-- Module cấp cao hơn không nên phụ thuộc vào các module cấp thấp hơn mà cả 2 phụ thuộc vào abstraction -->
<?php
interface ToiletInterface
{
    public function flush();
}
// Lower lever modules implement interface
// higher lever modules accept interface
// Both lower and higher level modules must depend on the interface (abstraction)
class PortaPottyToilet implements ToiletInterface{
    public function flush(){

    }
}
class GoldenToilet implements ToiletInterface{
    public function flush(){

    }
}
class Human{
    public function donePooping(ToiletInterface $toilet){
        $toilet->flush();
    }
}
?>