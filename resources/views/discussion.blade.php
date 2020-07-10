@extends('layouts.master')

@section('content')
<div class="app-main__inner">

<div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-stopwatch icon-gradient bg-amy-crisp"></i>
                    </div>
                    <div>Post
                        <div class="page-title-subheading">Share what you want to discuss with others!</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled="" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

                                    <div class="app-inner-layout__top-pane">
                                        <div class="pane-left">
                                            <div class="mobile-app-menu-btn">
                                                <button type="button" class="hamburger hamburger--elastic is-active">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <h4 class="mb-0">Inbox22</h4>
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-link">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-night-fade">
                                                            <div class="menu-header-image opacity-1" style="background-image: url('../assets/images/dropdown-header/city5.jpg');"></div>
                                                            <div class="menu-header-content text-dark">
                                                                <h5 class="menu-header-title">Settings</h5>
                                                                <h6 class="menu-header-subtitle">Manage all of your options</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-menu grid-menu-xl grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>Primary</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-map btn-icon-wrapper btn-icon-lg mb-3"> </i>Secondary</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Success</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-heart btn-icon-wrapper btn-icon-lg mb-3"> </i>Info</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-shadow btn btn-primary btn-sm">Submit</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pane-right">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search fa-w-16 "></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Search..." type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="bg-white">
                                        <div class="table-responsive">
                                            <table class="text-nowrap table-lg mb-0 table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="eCheckbox1" class="custom-control-input">
                                                                <label class="custom-control-label" for="eCheckbox1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/1.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Alina Mcloughlin</div>
                                                                        <div class="widget-subheading">Last seen online 15 minutes ago</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox12" class="custom-control-input"><label class="custom-control-label" for="eCheckbox12">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/2.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">John Smith</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox13" class="custom-control-input"><label class="custom-control-label" for="eCheckbox13">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/3.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox14" class="custom-control-input"><label class="custom-control-label" for="eCheckbox14">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/4.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">Create stunning UIs for your pages with these layout components...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox15" class="custom-control-input"><label class="custom-control-label" for="eCheckbox15">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/5.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">Etiam sit amet orci eget eros faucibus...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox16" class="custom-control-input"><label class="custom-control-label" for="eCheckbox16">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/6.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Alina Mcloughlin</div>
                                                                        <div class="widget-subheading">Last seen online 15 minutes ago</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 5 mins ago
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox17" class="custom-control-input"><label class="custom-control-label" for="eCheckbox17">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/7.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox18" class="custom-control-input"><label class="custom-control-label" for="eCheckbox18">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/8.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">But I must explain to you how all this mistaken idea of denouncing pleasure ...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width: 78px;">
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="eCheckbox19" class="custom-control-input"><label class="custom-control-label" for="eCheckbox19">&nbsp;</label></div>
                                                        </td>
                                                        <td class="text-left pl-1">
                                                            <i class="fa fa-star"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img class="rounded-circle" src="../assets/images/avatars/9.jpg" alt="" width="42">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">Create stunning UIs for your pages with these layout components...</td>
                                                        <td>
                                                            <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            <i class="fa fa-calendar-alt opacity-4 mr-2"></i> 7 Dec
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="app-inner-layout__bottom-pane d-block text-center">
                                            <nav class="" aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                    <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                          

</div>
@endsection