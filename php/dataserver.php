 <?php

    class database
    {

        private $dbhost;
        private $dbusername;
        private $dbpassword;
        private $dbname;

        protected function connect()
        {
            $this->dbhost = 'localhost';
            $this->dbusername = 'root';
            $this->dbpassword = '';
            $this->dbname = '17.01.04.126';

            $connection = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
            return $connection;
           
        }
    }

    class query extends database
    {

        public function getData($table, $field = '*', $condition_arr, $like = '', $order_by_field = '', $order_by_type = '', $limit = '')
        {

            $sql = " select * from $table ";
            // echo $sql;
            // print_r($condition_arr);


            //if we get any kind of condition then perform the equations
            if ($condition_arr != '') {
                $sql .= " where ";
                // $sql.="  ";
                $c = count($condition_arr);
                $i = 1;
                foreach ($condition_arr as $key => $value) {

                    if ($i = $c) {
                        $sql .= " $key='$value' ";
                    } else {
                        $sql .= " $key='$value' and ";
                    }
                    $i++;
                }
                //$sql=rtrim('and',$sql);
                //echo $condition_arr;    
            }
            //if some database called by order(ascending /descending)
            if ($order_by_field != '') {
                $sql .= " order by $order_by_field $order_by_type ";
            }
            //if limit is declared for database
            if ($limit != '') {
                $sql .= " limit $limit ";
            }
            //die($sql);


            $result= $this->connect()->query($sql);
            if ($result->num_rows > 0) {
                $arr[] = array();
                while ($row = $result->fetch_assoc()) {
                    $arr[] = $row;
                }
                return $arr;
            } else {
                return 0;
            }
          
        }


        public function InsertData($table, $condition_arr)
        {

            if ($condition_arr != '') {
                foreach ($condition_arr as $key => $value) {
                    $fieldArr[] = $key;
                    $ValueArr[] = $value;
                }
                $field = implode(",", $fieldArr);
                $value = implode("','", $ValueArr);
                // echo $field;

                $value = "'" . $value . "'";
                $sql = " insert into $table ($field) values ($value) ";
                $result = $this->connect()->query($sql);
               // die($sql);
                
            }
        }

        public function DeleteData($table,$condition_arr){

            $sql=" DELETE from $table where ";

            $c=count($condition_arr);
            $i=1;
            foreach($condition_arr as $key=>$value){

                if ($i == $c) {
                    $sql .= " $key='$value' ";
                } else {
                    $sql .= " $key='$value' and ";
                }
                $i++;
            }
            $result=$this->connect()->query($sql);
            die($sql);
        }

        public function UpdateData($table,$condition_arr,$where_field,$where_value){
            
            $sql=" UPDATE $table set ";

            $c=count($condition_arr);
            $i=1;
            foreach($condition_arr as $key=>$value){

                if ($i == $c) {
                    $sql .= " $key='$value' ";
                } else {
                    $sql .= " $key='$value', ";
                }
                $i++;
            }
            $sql.=" where $where_field = $where_value ";
            
            $result=$this->connect()->query($sql);
            die($sql);
           
        }

        public function Distinct_item($table,$column_name_one,$column_name_two){

            $sql = " SELECT $column_name_one,$column_name_two FROM $table";
            $result=$this->connect()->query($sql);
            //die($sql);
        }
    }

    ?>