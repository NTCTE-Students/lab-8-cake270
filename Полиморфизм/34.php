<?php 
interface Database {
    public function connect();
    public function query();
}
class MySQLDatabase implements Database {
   public function connect() {
        print('connect');
   }
   public function query() {
        print('query');
   }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        print('connect');

    }
    public function query() {
        print('query');
    }
}
class SQLiteDatabase implements Database {
    public function connect() {
        print('connect');

    }
    public function query() {
        print('query');
    }
}
?>