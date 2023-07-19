@extends('layouts.base')
    @section('content')
        <div class="main">
        <div class="left-side">
            <div class="left-side_info">
                <div class="logo">

                </div>
                <div class="wrapper-menu">
                    @widget('menu')
                </div>
            </div>
            <div class="lk-info">
                <div class="lk-name">
                    admin
                </div>
                <div class="change-pass">
                    Сменить пароль
                </div>
                <div class="lk-logout">
                    Выйти
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="section-name">
                Настройки разделов
            </div>
            <div class="section-content">
                @widget('sections_list')
            </div>
        </div>
    </div>
    @stop