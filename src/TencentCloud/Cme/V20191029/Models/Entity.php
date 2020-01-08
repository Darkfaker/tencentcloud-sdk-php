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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() 获取类型，取值有：
<li>PERSON：个人。</li>
 * @method void setType(string $Type) 设置类型，取值有：
<li>PERSON：个人。</li>
 * @method string getId() 获取Id，当 Type=PERSON，取值为用户 Id。
 * @method void setId(string $Id) 设置Id，当 Type=PERSON，取值为用户 Id。
 */

/**
 *用于描述资源的归属实体。
 */
class Entity extends AbstractModel
{
    /**
     * @var string 类型，取值有：
<li>PERSON：个人。</li>
     */
    public $Type;

    /**
     * @var string Id，当 Type=PERSON，取值为用户 Id。
     */
    public $Id;
    /**
     * @param string $Type 类型，取值有：
<li>PERSON：个人。</li>
     * @param string $Id Id，当 Type=PERSON，取值为用户 Id。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}