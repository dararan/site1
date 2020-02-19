<?php

require_once('Model.php');

class User extends Model
{
    protected $table = 'users';

    // ユーザーを新規作成するメソッド
    public function create($data)
    {
        // SQLを準備
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO '  . $this->table .  ' (name, password, icon) VALUES (?,?,?)');
        // 実行
        $stmt->execute($data);
    }

    // emailをもとにユーザーを取得する
    public function findByEmail($data)
    {
        // SQL準備
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE name = ?');
        // 実行
        $stmt->execute($data);
        // 結果の取得
        $user = $stmt->fetch();
        // 返却
        return $user;
    }
}