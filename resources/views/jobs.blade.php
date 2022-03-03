@extends('layouts.app')
@section('jobs')
    <!--Show Top danh sách công ty hàng đầu-->
    <div class="company-container container">
        <h2 class="title">Các công ty hàng đầu</h2>

        <div class="row">
            @foreach ($companies as $company)
                <div class="col l-2-4 m-6 c-12 m-4 c-12">
                    <div class="company-card">
                        <img src="{{ $company->imageUrl }}" />
                        <div class="company-card-content">
                            <p class="company-card-content-name">{{ $company->name }}</p>
                            <span class="tag">{{ $company->status }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--Show danh sách công việc tốt nhất-->
    <div id="best-work-top" class="best-work-container container">

        <h2 class="title">Công việc tốt nhất</h2>
        <div class="row">
            <div class="col l-4 m-6 c-12">
                <div class="best-work-card">

                    <div class="col l-3 m-3 c-3 job-img">
                        <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/acb.jpg"
                            alt="" class="logo" />
                    </div>
                    <div class="col l-9 m-9 c-9">
                        <div class="job-container">
                            <div class="job-name">
                                Project Manager - New Product Development
                            </div>
                            <div class="job-desc">
                                Công ty trách nhiệm hữu hạn sản xuất linh kiện điện tử
                            </div>
                            <span class="job-tag">HOT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="best-work-card">

                    <div class="col l-3 m-3 c-3 job-img">
                        <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/acb.jpg"
                            alt="" class="logo" />
                    </div>
                    <div class="col l-9 m-9 c-9">
                        <div class="job-container">
                            <div class="job-name">
                                Project Manager - New Product Development
                            </div>
                            <div class="job-desc">
                                Công ty trách nhiệm hữu hạn sản xuất linh kiện điện tử
                            </div>
                            <span class="job-tag">HOT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="best-work-card">

                    <div class="col l-3 m-3 c-3 job-img">
                        <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/acb.jpg"
                            alt="" class="logo" />
                    </div>
                    <div class="col l-9 m-9 c-9">
                        <div class="job-container">
                            <div class="job-name">
                                Project Manager - New Product Development
                            </div>
                            <div class="job-desc">
                                Công ty trách nhiệm hữu hạn sản xuất linh kiện điện tử
                            </div>
                            <span class="job-tag">HOT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-6 c-12">
                <div class="best-work-card">

                    <div class="col l-3 m-3 c-3 job-img">
                        <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/acb.jpg"
                            alt="" class="logo" />
                    </div>
                    <div class="col l-9 m-9 c-9">
                        <div class="job-container">
                            <div class="job-name">
                                Project Manager - New Product Development
                            </div>
                            <div class="job-desc">
                                Công ty trách nhiệm hữu hạn sản xuất linh kiện điện tử
                            </div>
                            <span class="job-tag">HOT</span>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!--Show danh sách ngành nghề trọng điểm-->
    <div class="top-career container">
        <h2 class="title">Ngành nghề trọng điểm</h2>
        <div class="row category-container">
            <div class="col l-2-4 m-6 c-12">
                <div class="category-card">
                    <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/itphanmem.png"
                        alt="" />
                    <h3 class="work-category">IT Phần mềm</h3>
                    <p class="total-work">1362 Việc làm</p>
                </div>
            </div>
            <div class="col l-2-4 m-6 c-12">
                <div class="category-card">
                    <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/taichinh_dautu.png"
                        alt="" />
                    <h3 class="work-category">Tài chính/ Đầu tư</h3>
                    <p class="total-work">1590 Việc làm</p>
                </div>
            </div>
            <div class="col l-2-4 m-6 c-12">
                <div class="category-card">
                    <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/taichinh_dautu.png"
                        alt="" />
                    <h3 class="work-category">Ngân hàng</h3>
                    <p class="total-work">1290 Việc làm</p>
                </div>
            </div>
            <div class="col l-2-4 m-6 c-12">
                <div class="category-card">
                    <img class="category-card-img"
                        src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/taichinh_dautu.png"
                        alt="" />
                    <h3 class="work-category">Bán hàng</h3>
                    <p class="total-work">3390 Việc làm</p>
                </div>
            </div>
            <div class="col l-2-4 m-6 c-12">
                <div class="category-card">
                    <img src="https://hoquanglinh.github.io/Website-ho-tro-tim-kiem-viec-lam/images/image_home/taichinh_dautu.png"
                        alt="" />
                    <h3 class="work-category">IT Phần cứng/ Mạng</h3>
                    <p class="total-work">1290 Việc làm</p>
                </div>
            </div>
        </div>
    </div>
@endsection()
