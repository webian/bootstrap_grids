<?php
namespace Laxap\BootstrapGrids\Controller;

/*
 *
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *
 */

class FlexFormController {

    /**
     * @param array $config
     * @return array
     */
    public function getTwoColumnOptions($config) {
        return \Laxap\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getThreeColumnOptions($config) {
        return \Laxap\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getFourColumnOptions($config) {
        return \Laxap\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public static function getColumnOptions($config) {
        // mdCol, msCol, smCol, xsCol or lgCol
        $columnType = substr($config['field'], 0, 2);

        $optionList = [
            ["LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset", "col-$columnType-0"],
            ["1 col (8%)", "col-$columnType-1"],
            ["2 col (17%)", "col-$columnType-2"],
            ["3 col (25%)", "col-$columnType-3"],
            ["4 col (33%)", "col-$columnType-4"],
            ["5 col (42%)", "col-$columnType-5"],
            ["6 col (50%)", "col-$columnType-6"],
            ["7 col (58%)", "col-$columnType-7"],
            ["8 col (66%)", "col-$columnType-8"],
            ["9 col (75%)", "col-$columnType-9"],
            ["10 col (83%)", "col-$columnType-10"],
            ["11 col (92%)", "col-$columnType-11"],
            ["12 col (100%)", "col-$columnType-12"],
            ["LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden", "hidden-$columnType"],
            ["LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible", "visible-$columnType"]
        ];

        $config['items'] = array_merge($config['items'], $optionList);
        return $config;
    }


}
