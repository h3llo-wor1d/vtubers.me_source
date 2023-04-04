<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

$cl["page_title"] = cl_translate("Hot topics");
$cl["page_desc"]  = $cl["config"]["description"];
$cl["page_kw"]    = $cl["config"]["keywords"];
$cl["pn"]         = "trending";
$cl["sbr"]        = true;
$cl["sbl"]        = true;
$cl["htags"]      = cl_get_hot_topics(30);
$cl["http_res"]   = cl_template("trending/content");
