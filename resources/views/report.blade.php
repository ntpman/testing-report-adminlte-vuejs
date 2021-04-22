@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ตัวอย่างหน้าจอ สำหรับการดูใบรายงาน</div>

                <div class="card-body">
                    {{-- รายงานการทดสอบ --}}
                    <div class="row mb-3 text-center">
                        <div class="col-md-12 ">
                            <h3>รายงานการทดสอบ</h3>
                        </div>
                        <div class="col-md-4">
                            <h5>ชื่อวัตถุตัวอย่าง</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="col-md-4">
                            <h5>เครื่องหมาย / ตรา</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                        <div class="col-md-4">
                            <h5>หมายเลขปฏิบัติการ</h5>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    {{-- /.row --}}

                    {{-- ผลการทดสอบ --}}
                    <div class="row mb-3 text-center">
                        <div class="col-md-12">
                            <h3>ผลการทดสอบ</h3>
                        </div>
                        <div class="col-md-3">
                            <h5>รายการทดสอบ</h5>
                            <p>Lorem, ipsum dolor. Lorem, ipsum.</p>
                        </div>
                        <div class="col-md-3">
                            <h5>ผลการทดสอบ</h5>
                            <p>ไม่พบ</p>
                        </div>
                        <div class="col-md-3">
                            <h5>หน่วย</h5>
                            <p>มิลลิกรัม/กิโลกรัม</p>
                        </div>
                        <div class="col-md-3">
                            <h5>LOD</h5>
                            <p>0.24</p>
                        </div>
                    </div>
                    {{-- /.row --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
