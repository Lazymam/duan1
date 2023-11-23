<?php
// require_once 'pdo.php';

function user_insert($username, $password, $email){
    $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function user_update($username, $password, $email,$diachi,$dienthoai,$role,$id){
    $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql, $username, $password, $email,$diachi,$dienthoai,$role,$id);
}

function checkuser($username,$password){
    $sql="SELECT * FROM user WHERE username=? AND password=?";
    return pdo_query_one($sql, $username,$password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}

function get_user($id){
    $sql="SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $id);
}
// function user__update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user__delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user__select_all(){
//     $sql = "SELECT * FROM user_";
//     return pdo_query($sql);
// }

// function user__select_by_id($ma_kh){
//     $sql = "SELECT * FROM user_ WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user__exist($ma_kh){
//     $sql = "SELECT count(*) FROM user_ WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user__select_by_role($vai_tro){
//     $sql = "SELECT * FROM user_ WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user__change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user_ SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }