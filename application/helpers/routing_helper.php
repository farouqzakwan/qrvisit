<?php

    if(!function_exists('installation_url')){
        function installation_url($path = null){
            return base_url('/migrations/install/'.$path);
        }
    }

    if(!function_exists('company_url')){
        function company_url($path = null){
            return base_url('/companies/'.$path);
        }
    }

    if(!function_exists('dashboard_url')){
        function dashboard_url($path = null){
            return base_url('/dashboard/'.$path);
        }
    }

	if(!function_exists('home_url')){
        function home_url($path = null){
            return base_url('/home/'.$path);
        }
	}
    
    if(!function_exists('login_url')){
        function login_url($path = null){
            return base_url('/login/'.$path);
        }
	}
    
    if(!function_exists('qr_url')){
        function qr_url($path = null){
            return base_url('/qr/'.$path);
        }
    }
    
	if(!function_exists('register_url')){
        function register_url($path = null){
            return base_url('/register/'.$path);
        }
	}
    
?>