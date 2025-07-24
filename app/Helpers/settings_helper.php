<?php

/**
 * Re format the features list of the websites
 * 
 * @param array $list
 * @param array $loadedFeatures
 * 
 * @return array
 */
function reformat_features($list, $loadedFeatures = []) {
    
    if(empty($loadedFeatures)) return $list;
    
    $keyValues = [];
    foreach($loadedFeatures as $key => $value) {
        $keyValues[$value['initial']] = strtolower(str_ireplace(" ", "_", $value['name']));
    }

    foreach($list as $item) {
        $websiteFeatures[] = $keyValues[$item] ?? $item;
    }

    return $websiteFeatures ?? [];
}

/**
 * Heatmap Features
 * 
 * @param array $features
 * 
 * @return array
 */
function heatmap_features($heatmapArray = []) {

    $list = [
        "page_vitals" => "allowPageVitals",
        "ai_insight" => "enableAiInsight",
        "comparison_mode" => "isCompatibleWithInteractiveMode",
        "industry_benchmark" => "allowIndustryBenchmark",
        "interactive_mode" => "isCompatibleWithInteractiveMode",
        "system_of_records" => "systemOfRecords",
        "ads_platform" => "adsPlatform",
        "group_heatmaps" => "showGroupHeatmaps"
    ];

    // set all the features to false
    foreach($list as $feature) {
        $heatmapArray[$feature] = false;
    }

    // set the features to true
    foreach($heatmapArray['features'] as $feature) {
        $heatmapArray[$list[$feature]] = true;
    }

    // set the freemium page
    $heatmapArray['isFreemiumPage'] = in_array("freemium", $heatmapArray['features']);

    return $heatmapArray ?? [];
}