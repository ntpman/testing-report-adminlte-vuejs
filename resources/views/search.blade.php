@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ตัวอย่างหน้าจอ สำหรับค้นหาหมายเลขปฏิบัติการ</div>

                <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputSearch">โปรดระบุหมายเลขปฏิบัติการ</label>
                        <input type="text" class="form-control" id="exampleInputSearch" placeholder="L64/...">
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-detail">ค้นหา</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- container-fluid -->

<!-- modal -->
<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">รายละเอียด</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                  <!-- text input -->
                  <div class="form-group">
                    <label>ชื่อวัตถุตัวอย่าง</label>
                    <input type="text" class="form-control" placeholder="ภาชนะและเครื่องใช้เมลามีน-ฟอร์แมลดีไฮด์" disabled="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>เครื่องหมาย / ตรา</label>
                    <input type="text" class="form-control" placeholder="สมอ.กค.6 บน2921-16/2" disabled="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>หมายเลขปฏิบัติการ</label>
                    <input type="text" class="form-control" placeholder="L64/01612.1" disabled="">
                  </div>
                </div>
            </div>
            {{-- /.row --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>รายการทดสอบ</label>
                        <input type="text" class="form-control" placeholder="เมลามีนในกรดอะซิติก ร้อยละ 3 (น้ำหนักต่อปริมาตร)">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>ผลการทดสอบ</label>
                        <input type="text" class="form-control" placeholder="ไม่พบ">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>หน่วย</label>
                        <input type="text" class="form-control" placeholder="มิลลิกรัม/กิโลกรัม">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>LOD</label>
                        <input type="text" class="form-control" placeholder="0.24">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">เพิ่มรูปภาพ</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
          {{-- <button type="button" class="btn btn-primary">บันทึก</button> --}}
          <a href="{{ url('/report') }}" class="btn btn-primary">บันทึก</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection    

