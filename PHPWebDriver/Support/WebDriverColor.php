<?php
// Copyright 2012-present Element 34
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

include_once('WebDriverExceptions.php');

class PHPWebDriver_Support_Color {
    public function __construct($color) {
        $this->color = $color;
        return $this;
    }

    public function rgb() {}
        
    public function rgba() {}
        
    public function hex() {}
        
}