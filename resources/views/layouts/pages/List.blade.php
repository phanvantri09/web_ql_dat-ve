@extends('layouts.master')
@section('content')
<div class="breadcrumb container    ">
        <a href="" class="active1">Vé xe khách</a>
        <span>></span>
        <a href="">Xe đi Sài Gòn từ Bình Thuận</a>
    </div>
    <form action="{{ route('timve') }}" method="post">
        @csrf
    <ul class="search_ticket container">
        <li>
            <label for="cars">Xuất phát:</label>
            <select name="addressstart" id="cars">
                <option value="1">Quảng Nam</option>
                <option value="2">Quảng Ngãi</option>
                <option value="3">Quảng Ninh</option>
                <option value="4">Đà Nẵng</option>
                <option value="5">Quảng Bình</option>
                <option value="6">Quảng Trị</option>
                {{-- @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach --}}

            </select>
        </li>
        <li>
            <img src="./images/2-way.png" alt="" srcset="">
        </li>
        <li>
            <label for="cars">Điểm dừng:</label>
            <select name="addressend" id="cars">
                <option value="1">Quảng Nam</option>
                <option value="2">Quảng Ngãi</option>
                <option value="3">Quảng Ninh</option>
                <option value="4">Đà Nẵng</option>
                <option value="5">Quảng Bình</option>
                <option value="6">Quảng Trị</option>
            </select>
        </li>
        <li>
            <img src="./images/line.png" alt="" srcset="">
        </li>
        <li>
            <!-- <img src="./images/calendar.png" alt="" srcset="">
            <span>17-09-2021</span> -->
            <input name="timestart" type="datetime-local">
        </li>
        <li>
            <button type="submit">TÌM VÉ</button>
        </li>
    </ul>
</form>
    <p style="padding: 3rem 0rem;font-weight: 700;" class="container">
        OCT cam kết hoàn tiền 200% nếu không giữ vé
    </p>
    <div class="container">
        <div class="index">
            <div class="index__left">
                <div class="index__left--top">
                    <span>Bộ lọc</span>
                    <span onclick="removeFilter()">Xóa lọc</span>
                </div>
                <div class="index__left--filter">
                    <p class="index__left--title">Giờ đi</p>
                    <ul class="first">
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                    </ul>
                    <p class="index__left--title">Giá vé</p>
                    <div class="index__left--filter--range">
                        <p>500.000đ</p>
                        <input type="range" min="0" max="2000000" value="500000">
                        <div>
                            <span>0đ</span>
                            <span>2.000.000đ</span>
                        </div>
                    </div>

                    <p class="index__left--title">Số ghế còn trống</p>
                    <ul class="amount">
                        <li class="button">-</li>
                        <li class="input"><input type="text" value="1"></li>
                        <li class="button">+</li>
                    </ul>
                    <p class="index__left--title">Nhà xe</p>
                    <div class="index__left--filter--search">
                        <input type="text" placeholder="Tìm trong danh sách">
                    </div>
                    <ul class="list">
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Minh nghĩa</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Tuấn tú</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Kì duyên</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="index__right">
                <div class="index__right--top">
                    <span>
                        Sắp xếp theo
                    </span>
                    <ul>
                        <li class="active">
                            Giờ đi sớm nhất
                        </li>
                        <li>Giờ đi muộn nhất</li>
                        <li>Giá tăng dần</li>
                        <li>Giá giảm dần</li>
                    </ul>
                </div>
                <div class="index__right--content">
                    {{-- @if (!isset($ticketSearch))
                    <div class="not__found" style="display: none;">
                        Không tìm thấy dữ liệu.
                    </div>
                    @endif
                    @isset($ticketSearch)
                        @empty($ticketSearch)
                        <h1>không có giá chuyến xe nào</h1>
                        @endempty
                    @endisset --}}

                    @foreach($news as  $news)
                    <div class="index__right--item">
                        <div>
                            <a href="">
                                <img src="{{asset('userss/images/product_01.png')}}" alt="" srcset="">
                            </a>
                            <div>
                                <p>{{$news->name}}</p>
                                <p>Giường nằm 6 chỗ</p>
                                <div>
                                    <img src="{{asset('userss/images/location_02.png')}}" alt="">
                                    <div>
                                        <p>
                                            <span>{{$news->timestart}}</span>
                                            <span>•</span>
                                            <span>Bến Xe
                                            @if ($news->addressstart == 1)
                                             Quảng Nam
                                             @endif
                                             @if ($news->addressstart == 2)
                                             Quảng Ngãi
                                             @endif
                                             @if ($news->addressstart == 3)
                                             Quảng Ninh
                                             @endif
                                             @if ($news->addressstart == 4)
                                             Quảng Bình
                                             @endif
                                             @if ($news->addressstart == 5)
                                             Quảng Trị
                                             @endif
                                             @if ($news->addressstart == 6)
                                             Quảng
                                             @endif
                                           </span>
                                        </p>

                                        <p>
                                            <span>{{$news->timeend}}</span>
                                            <span>•</span>
                                            <span>Bến Xe

                                            @if ($news->addressstart == 1)
                                            Hồ Chí Minh
                                             @endif
                                             @if ($news->addressstart == 2)
                                            Hà Nội
                                             @endif
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                    </li>
                                    <li>
                                        <button class="button__search__delivery active">Chọn chuyến</button>
                                    </li>
                                </ul>
                                <span class="price">{{$news->price}} Vnd</span>
                            </div>
                        </div>
                        <div class="index__right--child hidden">
                            <ul class="index__right--child--status" data-index="0">
                                <li class="active">
                                    <span>1</span>
                                    <span>Chọn chỗ ngồi</span>
                                </li>
                                <li>
                                    <span>2</span>
                                    <span>Nhập thông tin</span>
                                </li>
                                <li class="button__search__delivery__">
                                    <i class="bx bx-x"></i>
                                </li>
                            </ul>
                            {{-- <p class="text">OCT cam kết giữ đúng chỗ ngồi của bạn</p> --}}
                            <!--Step 1 -->
                            <div class="step1 step">
                                <ul>
                                    <li>
                                        <div class="index__right--child--item box empty">
                                            <span></span>
                                        </div>
                                        <span>Còn trống</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box">
                                            <span></span>
                                            <span class="close bx bx-x"></span>
                                        </div>
                                        <span>Đã bán</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box selected">
                                            <span></span>
                                        </div>
                                        <span>Đang chọn</span>
                                    </li>
                                </ul>
                                <div>
                                    <div>
                                        <p>Tầng trên</p>
                                        <ul>
                                            @foreach ($ticket as $tk)
                                            {{-- 0 là chưa đặt , 1 đã đặt --}}
                                                @if ($tk->location % 2 == 0)
                                                    @if($tk->id_nhaxe == $news->id && $tk->status == 1)
                                                        <li>
                                                            <div class="index__right--child--item box empty">
                                                                <span></span>
                                                            </div>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <div class="index__right--child--item box">
                                                                <span></span>
                                                                <span class="close bx bx-x"></span>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div>
                                        <p>Tầng dưới</p>
                                        <ul>
                                            @foreach ($ticket as $tk)
                                            {{-- 0 là chưa đặt , 1 đã đặt --}}
                                                @if ($tk->location % 2 != 0)
                                                    @if($tk->id_nhaxe == $news->id && $tk->status == 1)
                                                        <li>
                                                            <div class="index__right--child--item box empty">
                                                                <span></span>
                                                            </div>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <div class="index__right--child--item box">
                                                                <span></span>
                                                                <span class="close bx bx-x"></span>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Step 1 -->


                            <!--Step 3 -->
                            <form action="#" class="step step3 hidden form-contact form__if js_form">
                                @csrf
                                <input type="hidden" name="id_ticket" id="id_ticket">
                                <input type="hidden" name="id_new" id="id_new">
                                <input type="hidden" name="location[]" id="location">
                                <input type="hidden" name="id_ticket" id="id_ticket">
                                <div class="form-field">
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Họ và tên</label>
                                        </div>
                                        <div class="field__input">
                                            <input type="text" name="name" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_phone" type="text" name="phone"
                                                placeholder="Nhập số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Email để nhận thông tin vé</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_email" type="text" name="email"
                                                placeholder="Nhập số điện email...">
                                        </div>
                                    </div>
                                    <div class="field optional">
                                        <div class="field__label">
                                            <label for="">Ghi chú (Nếu có)</label>
                                        </div>
                                        <div class="field__input">
                                            <textarea type="text" name="content"
                                                placeholder="Chúng tôi sẽ cố gắng hết sức để đáp ưng nhu cầu của bạn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="" style="margin: 0.2rem;text-align: center;">
                                    <span class="text-red">(*)</span>
                                    <span>Bằng việc nhấn nút Tiếp Tục, bạn đồng ý với</span>
                                </p>
                                <p class="" style="margin-bottom: 0.5rem;text-align: center;">
                                    <span class="text-red">Chính sách bảo mật thông tin</span>
                                    <span class="text-black">và</span>
                                    <span>Quy chế</span>
                                </p>
                            </form>
                            <!--Step 3 -->

                            <ul class="footer" id="btn__k" style="margin-right: -1rem;">
                                <li>
                                    <button class="button_previous hidden">Quay lại</button>
                                </li>
                                <li></li>
                                <li id="total"></li>
                                <li><button class="button_next" id="button_next" onclick="button_next()">Tiếp tục</button></li>
                            </ul>
                        </div>
                    </div>
                   @endforeach
                </div>
                {{-- <div class="index__right--footer">
                    <button>Tìm thêm chuyến</button>
                </div> --}}
            </div>
        </div>
    </div>
    <script>

        function button_next(){
            var btn = document.getElementById('button_next');
            btn.setAttribute('type', 'submit');
        }
    </script>

@endsection
