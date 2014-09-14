<?PHP
/* ====================
[BEGIN_COT_EXT]
Code=karma
Name=Karma
Description=Плагин позволяет реализовать на форуме систему рейтингов (репутации) для пользователей.
Version=4.0
Date=04.08.2014
Author=Dr2005alex
Copyright=Dr2005alex http://mycotonti.ru
Notes=
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=
[END_COT_EXT]
[BEGIN_COT_EXT_CONFIG]
minpost=101:string::0:Минимальное количество постов для изменения кармы другим
karmatime=104:string::1:Delay between 2 changes (anti-flood), hours
dbl_rec=105:radio::0:Разрешить отдавать голос за одно сообщение более одного раза ?
k_forums=106:string::no_all:Секции форума.
karma_f=107:string::1:Множитель.
karma_f_max=108:string::1:Максимальный уровень голоса.
karma_maxpage=109:string::20:Макс. количество голосов на странице :
karma_page_on=110:radio::1:Разрешить показ на страницах ?
karma_com_on=111:radio::1:Разрешить показ в комментариях ?
karma_frm_on=112:radio::1:Разрешить показ на форуме ?
close_win=113:radio::1:Закрывать окно после изменения рейтинга ?
neg_rec=114:radio::0:Разрешить понижать репутацию, пользователям с отрицательной репутацией ?
karma_auth=115:string::0.1:Балл за вход на сайт
karma_f_min=116:string::1:Минимальный уровень голоса.
karma_css=117:radio::1:использовать css файл плагина.
karma_com=118:radio::1:Обязательно оставлять комментарий.
karma_profile=119:radio::1:Использовать дополнительные поля пользователя.
karma_color=120:string::0,5,20:Пороги изменения цвета.
[END_COT_EXT_CONFIG]

==================== */
defined('COT_CODE') or die('Wrong URL');

/**
 * @package Karma
 * @author Dr2005alex
 * @copyright Copyright (c) 2014 Dr2005alex http://mycotonti.ru
 * @license Distributed under BSD license.
 */