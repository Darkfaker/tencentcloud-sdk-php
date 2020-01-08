<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCode() 获取错误码
 * @method void setCode(string $Code) 设置错误码
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 */

/**
 *描述每个实例（应用，大区或表）处理过程中可能出现的错误详情。
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string 错误码
     */
    public $Code;

    /**
     * @var string 错误信息
     */
    public $Message;
    /**
     * @param string $Code 错误码
     * @param string $Message 错误信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}