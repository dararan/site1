<?php

class Threads extends Model
{
    protected $table = 'threads';

    // スレッドを新規作成するメソッド
    public function create($data)
    {
        //SQLを実行
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO'. $this->table . '(title, user_name, user_icon, user_comment) VALUES (?,?,?,?)');
        //実行
        $stmt->execute($data);
    }

    // idをもとにタイトルとコメントを取得する
    public function findByid($data)
    {
        // SQL準備
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM' . $this->table . ' WHERE id = ?');
        // 実行
        $stmt->execute($data);
        // 結果の取得
        $thread = $stmt->fetch();
        // 返却
        return $thread;
    }
}