<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_case()
    {
       $var_case = "hello world";
       $var = 'test'; //this is the testing comment

       $data = '<ruleset name= "Laravel PHPCS Rules">

    <description>PHPCS ruleset for Example app.</description>

    <file>app</file>

    <!-- Show progress of the run -->
    <arg value= "p"/>

    <!-- Show sniff codes in all reports -->
    <arg value= "s"/>

    <!-- Our base rule: set to PSR12 -->
    <!-- <rule ref="PSR12">
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceBefore"/>
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceAfter"/>
    </rule> -->

    <!-- <rule ref= "Generic.Files.LineLength">
        <properties>
            <property name="lineLimit" value="80"/>
            <property name="absoluteLineLimit" value="120"/>
        </properties>
    </rule> -->
    <rule ref="PSR1.Methods.CamelCapsMethodName.NotCamelCaps">
        <exclude-pattern>tests/</exclude-pattern>
        <ruleset name= "Laravel PHPCS Rules">

    <description>PHPCS ruleset for Example app.</description>

    <file>app</file>

    <!-- Show progress of the run -->
    <arg value= "p"/>

    <!-- Show sniff codes in all reports -->
    <arg value= "s"/>

    <!-- Our base rule: set to PSR12 -->
    <!-- <rule ref="PSR12">
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceBefore"/>
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceAfter"/>
    </rule> -->

    <!-- <rule ref= "Generic.Files.LineLength">
        <properties>
            <property name="lineLimit" value="80"/>
            <property name="absoluteLineLimit" value="120"/>
        </properties>
    </rule> -->
    <rule ref="PSR1.Methods.CamelCapsMethodName.NotCamelCaps">
        <exclude-pattern>tests/</exclude-pattern>
    </rule>
    <ruleset name= "Laravel PHPCS Rules">

    <description>PHPCS ruleset for Example app.</description>

    <file>app</file>

    <!-- Show progress of the run -->
    <arg value= "p"/>

    <!-- Show sniff codes in all reports -->
    <arg value= "s"/>

    <!-- Our base rule: set to PSR12 -->
    <!-- <rule ref="PSR12">
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceBefore"/>
        <exclude name="PSR12.Operators.OperatorSpacing.NoSpaceAfter"/>
    </rule> -->

    <!-- <rule ref= "Generic.Files.LineLength">
        <properties>
            <property name="lineLimit" value="80"/>
            <property name="absoluteLineLimit" value="120"/>
        </properties>
    </rule> -->
    <rule ref="PSR1.Methods.CamelCapsMethodName.NotCamelCaps">
        <exclude-pattern>tests/</exclude-pattern>
    </rule>
    </rule>';

       return $var_case;

    }
}
