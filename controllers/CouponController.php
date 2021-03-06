<?php

class CouponController extends Controller
{

  function index()
  {
    $this->view("coupon/couponList");
  }

  function list()
  {
    $coupon = $this->model("Coupon");
    $this->view("coupon/couponList", $coupon);
  }

  function create()
  {
    $coupon = $this->model("Coupon");
    $this->view("coupon/couponCreate", $coupon);
  }

  function detail($id)
  {
    $coupon = $this->model("Coupon");
    $coupon->id = $id;
    $this->view("coupon/couponDetail", $coupon);
  }

  function update($id) {
    $coupon = $this->model("Coupon");
    $coupon->id = $id;
    $this->view("coupon/couponUpdate", $coupon);
  }

  function user($id) {
    $coupon = $this->model("Coupon");
    $coupon->id = $id;
    $this->view("coupon/couponUser", $coupon);
  }

  function typedetail(){
    $coupon=$this->model("Coupon");
    $this->view("coupon/couponTypeDetail", $coupon);
  }

  function typeupdate($id){
    $coupon = $this->model("Coupon");
    $coupon->id = $id;
    $this->view("coupon/couponTypeUpdate", $coupon);
  }
}
