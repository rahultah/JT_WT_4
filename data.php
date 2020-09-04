
<?php
class OrderData {
    public $item_list;
   function __construct(array $item_list) {
        if (sizeof($item_list)>0) {
            $this->item_list = $item_list;
        } else {
            throw new Exception("No record available");
        }
    }
    public function get_order($id) {
       $response = ["invalid Order ID"];
       
       if($id) {
            foreach($this->item_list as $menu_items) {
                if ($id == $menu_items['id']) { 
                  $response = $menu_items;
                    break;
               }
            }
        }
        return json_encode($response);
    }
}
?>