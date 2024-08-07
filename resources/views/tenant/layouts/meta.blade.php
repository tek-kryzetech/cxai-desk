<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="{{ getGeneralSettingData(getUserIdByTenant(),'app_name') }}">
<meta name="description" content="{{ getOption('meta_description') }}">
<meta name="keywords" content="{{ getOption('meta_keyword') }}">
<meta name="author" content="{{ getOption('meta_author') }}">

<meta property="og:type" content="Property">
<meta property="og:title" content="{{ getGeneralSettingData(getUserIdByTenant(),'app_name') }}">
<meta property="og:description" content="{{ getOption('meta_description') }}">
<meta property="og:image" content="{{ getFileUrl(getGeneralSettingData(getUserIdByTenant(),'app_logo')) }}">

<meta name="twitter:card" content="{{ getOption('app_name') }}">
<meta name="twitter:title" content="{{ getOption('app_name') }}">
<meta name="twitter:description" content="{{ getFileUrl(getGeneralSettingData(getUserIdByTenant(),'app_fav_icon'))}}">
<meta name="twitter:image" content="{{ getFileUrl(getGeneralSettingData(getUserIdByTenant(),'app_logo')) }}">

<meta name="csrf-token" content="{{ csrf_token() }}" />
