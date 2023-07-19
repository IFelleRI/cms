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
                Section name
            </div>
            <div class="section-content">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolore earum eos ex fugit labore magni
                    maiores nesciunt nulla, possimus quas quia quis quod totam ullam unde velit voluptates voluptatum!
                </div>
                <div>Ad aliquid asperiores consequatur dolores dolorum ducimus eius illo incidunt inventore iste iure
                    laboriosam laborum libero mollitia non provident quae, quo temporibus veritatis voluptate. Architecto
                    cumque fugit hic nisi odit.
                </div>
                <div>A accusamus adipisci alias aliquam aspernatur aut, corporis cumque distinctio dolorem doloribus et eum
                    explicabo facere fuga harum laudantium minus molestiae neque nihil nobis perspiciatis provident
                    quibusdam quod sit voluptates!
                </div>
            </div>
        </div>
    </div>
    @stop