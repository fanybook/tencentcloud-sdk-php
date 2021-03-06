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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getOnline() 获取设备是否在线，0不在线，1在线
 * @method void setOnline(integer $Online) 设置设备是否在线，0不在线，1在线
 * @method integer getLoginTime() 获取设备登陆时间
 * @method void setLoginTime(integer $LoginTime) 设置设备登陆时间
 * @method string getVersion() 获取设备版本
 * @method void setVersion(string $Version) 设置设备版本
 * @method string getDeviceCert() 获取设备证书，证书加密的设备返回
 * @method void setDeviceCert(string $DeviceCert) 设置设备证书，证书加密的设备返回
 * @method string getDevicePsk() 获取设备密钥，密钥加密的设备返回
 * @method void setDevicePsk(string $DevicePsk) 设置设备密钥，密钥加密的设备返回
 * @method array getTags() 获取设备属性
 * @method void setTags(array $Tags) 设置设备属性
 * @method integer getDeviceType() 获取设备类型
 * @method void setDeviceType(integer $DeviceType) 设置设备类型
 * @method string getImei() 获取IMEI
 * @method void setImei(string $Imei) 设置IMEI
 * @method integer getIsp() 获取运营商类型
 * @method void setIsp(integer $Isp) 设置运营商类型
 * @method string getNbiotDeviceID() 获取NB IOT运营商处的DeviceID
 * @method void setNbiotDeviceID(string $NbiotDeviceID) 设置NB IOT运营商处的DeviceID
 * @method integer getConnIP() 获取IP地址
 * @method void setConnIP(integer $ConnIP) 设置IP地址
 * @method integer getLastUpdateTime() 获取设备最后更新时间
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置设备最后更新时间
 * @method string getLoraDevEui() 获取LoRa设备的dev eui
 * @method void setLoraDevEui(string $LoraDevEui) 设置LoRa设备的dev eui
 */

/**
 *设备详细信息
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 设备是否在线，0不在线，1在线
     */
    public $Online;

    /**
     * @var integer 设备登陆时间
     */
    public $LoginTime;

    /**
     * @var string 设备版本
     */
    public $Version;

    /**
     * @var string 设备证书，证书加密的设备返回
     */
    public $DeviceCert;

    /**
     * @var string 设备密钥，密钥加密的设备返回
     */
    public $DevicePsk;

    /**
     * @var array 设备属性
     */
    public $Tags;

    /**
     * @var integer 设备类型
     */
    public $DeviceType;

    /**
     * @var string IMEI
     */
    public $Imei;

    /**
     * @var integer 运营商类型
     */
    public $Isp;

    /**
     * @var string NB IOT运营商处的DeviceID
     */
    public $NbiotDeviceID;

    /**
     * @var integer IP地址
     */
    public $ConnIP;

    /**
     * @var integer 设备最后更新时间
     */
    public $LastUpdateTime;

    /**
     * @var string LoRa设备的dev eui
     */
    public $LoraDevEui;
    /**
     * @param string $DeviceName 设备名
     * @param integer $Online 设备是否在线，0不在线，1在线
     * @param integer $LoginTime 设备登陆时间
     * @param string $Version 设备版本
     * @param string $DeviceCert 设备证书，证书加密的设备返回
     * @param string $DevicePsk 设备密钥，密钥加密的设备返回
     * @param array $Tags 设备属性
     * @param integer $DeviceType 设备类型
     * @param string $Imei IMEI
     * @param integer $Isp 运营商类型
     * @param string $NbiotDeviceID NB IOT运营商处的DeviceID
     * @param integer $ConnIP IP地址
     * @param integer $LastUpdateTime 设备最后更新时间
     * @param string $LoraDevEui LoRa设备的dev eui
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new DeviceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("NbiotDeviceID",$param) and $param["NbiotDeviceID"] !== null) {
            $this->NbiotDeviceID = $param["NbiotDeviceID"];
        }

        if (array_key_exists("ConnIP",$param) and $param["ConnIP"] !== null) {
            $this->ConnIP = $param["ConnIP"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }
    }
}
