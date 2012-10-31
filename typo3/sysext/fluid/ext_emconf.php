<?php

########################################################################
# Extension Manager/Repository config file for ext "fluid".
#
# Auto generated 16-10-2012 10:06
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Templating Engine',
	'description' => 'Fluid is a next-generation templating engine which makes the life of extension authors a lot easier!',
	'category' => 'fe',
	'author' => 'Sebastian Kurfürst, Bastian Waidelich',
	'author_email' => 'sebastian@typo3.org, bastian@typo3.org',
	'shy' => '',
	'dependencies' => 'extbase',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '4.7.5',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'extbase' => '4.7.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:247:{s:13:"ChangeLog.txt";s:4:"546f";s:16:"ext_autoload.php";s:4:"84d4";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"d809";s:14:"ext_tables.php";s:4:"e8e2";s:24:"ext_typoscript_setup.txt";s:4:"b410";s:21:"Classes/Exception.php";s:4:"7373";s:17:"Classes/Fluid.php";s:4:"ac13";s:49:"Classes/Compatibility/DocbookGeneratorService.php";s:4:"84b6";s:47:"Classes/Compatibility/TemplateParserBuilder.php";s:4:"617b";s:26:"Classes/Core/Exception.php";s:4:"ab65";s:50:"Classes/Core/Compiler/AbstractCompiledTemplate.php";s:4:"7a3e";s:42:"Classes/Core/Compiler/TemplateCompiler.php";s:4:"c511";s:37:"Classes/Core/Parser/Configuration.php";s:4:"4b7e";s:33:"Classes/Core/Parser/Exception.php";s:4:"425a";s:44:"Classes/Core/Parser/InterceptorInterface.php";s:4:"d4e9";s:47:"Classes/Core/Parser/ParsedTemplateInterface.php";s:4:"47ca";s:36:"Classes/Core/Parser/ParsingState.php";s:4:"12f1";s:38:"Classes/Core/Parser/TemplateParser.php";s:4:"97a6";s:42:"Classes/Core/Parser/Interceptor/Escape.php";s:4:"e848";s:47:"Classes/Core/Parser/SyntaxTree/AbstractNode.php";s:4:"3909";s:44:"Classes/Core/Parser/SyntaxTree/ArrayNode.php";s:4:"017a";s:46:"Classes/Core/Parser/SyntaxTree/BooleanNode.php";s:4:"7752";s:48:"Classes/Core/Parser/SyntaxTree/NodeInterface.php";s:4:"6a06";s:53:"Classes/Core/Parser/SyntaxTree/ObjectAccessorNode.php";s:4:"6a32";s:65:"Classes/Core/Parser/SyntaxTree/RenderingContextAwareInterface.php";s:4:"f958";s:43:"Classes/Core/Parser/SyntaxTree/RootNode.php";s:4:"cbb9";s:43:"Classes/Core/Parser/SyntaxTree/TextNode.php";s:4:"f6ff";s:49:"Classes/Core/Parser/SyntaxTree/ViewHelperNode.php";s:4:"06bf";s:43:"Classes/Core/Rendering/RenderingContext.php";s:4:"e8e4";s:52:"Classes/Core/Rendering/RenderingContextInterface.php";s:4:"8837";s:55:"Classes/Core/ViewHelper/AbstractConditionViewHelper.php";s:4:"2825";s:54:"Classes/Core/ViewHelper/AbstractTagBasedViewHelper.php";s:4:"d61f";s:46:"Classes/Core/ViewHelper/AbstractViewHelper.php";s:4:"0880";s:46:"Classes/Core/ViewHelper/ArgumentDefinition.php";s:4:"6b75";s:37:"Classes/Core/ViewHelper/Arguments.php";s:4:"a2c0";s:37:"Classes/Core/ViewHelper/Exception.php";s:4:"ebd8";s:46:"Classes/Core/ViewHelper/TagBasedViewHelper.php";s:4:"9ac6";s:38:"Classes/Core/ViewHelper/TagBuilder.php";s:4:"5bb5";s:53:"Classes/Core/ViewHelper/TemplateVariableContainer.php";s:4:"22b7";s:47:"Classes/Core/ViewHelper/ViewHelperInterface.php";s:4:"fab1";s:55:"Classes/Core/ViewHelper/ViewHelperVariableContainer.php";s:4:"5259";s:62:"Classes/Core/ViewHelper/Exception/InvalidVariableException.php";s:4:"333f";s:76:"Classes/Core/ViewHelper/Exception/RenderingContextNotAccessibleException.php";s:4:"6036";s:59:"Classes/Core/ViewHelper/Facets/ChildNodeAccessInterface.php";s:4:"0164";s:54:"Classes/Core/ViewHelper/Facets/CompilableInterface.php";s:4:"681b";s:53:"Classes/Core/ViewHelper/Facets/PostParseInterface.php";s:4:"07a8";s:48:"Classes/Core/Widget/AbstractWidgetController.php";s:4:"3677";s:48:"Classes/Core/Widget/AbstractWidgetViewHelper.php";s:4:"31b0";s:47:"Classes/Core/Widget/AjaxWidgetContextHolder.php";s:4:"ac8e";s:33:"Classes/Core/Widget/Bootstrap.php";s:4:"bcd5";s:33:"Classes/Core/Widget/Exception.php";s:4:"896b";s:37:"Classes/Core/Widget/WidgetContext.php";s:4:"f940";s:37:"Classes/Core/Widget/WidgetRequest.php";s:4:"0663";s:44:"Classes/Core/Widget/WidgetRequestBuilder.php";s:4:"1e5f";s:44:"Classes/Core/Widget/WidgetRequestHandler.php";s:4:"a7ae";s:60:"Classes/Core/Widget/Exception/MissingControllerException.php";s:4:"8532";s:67:"Classes/Core/Widget/Exception/RenderingContextNotFoundException.php";s:4:"c47f";s:64:"Classes/Core/Widget/Exception/WidgetContextNotFoundException.php";s:4:"6a26";s:64:"Classes/Core/Widget/Exception/WidgetRequestNotFoundException.php";s:4:"4471";s:36:"Classes/Service/DocbookGenerator.php";s:4:"0f82";s:37:"Classes/View/AbstractTemplateView.php";s:4:"c829";s:26:"Classes/View/Exception.php";s:4:"0e66";s:31:"Classes/View/StandaloneView.php";s:4:"09b5";s:29:"Classes/View/TemplateView.php";s:4:"c1e6";s:50:"Classes/View/Exception/InvalidSectionException.php";s:4:"0e7b";s:59:"Classes/View/Exception/InvalidTemplateResourceException.php";s:4:"b31a";s:39:"Classes/ViewHelpers/AliasViewHelper.php";s:4:"c04b";s:38:"Classes/ViewHelpers/BaseViewHelper.php";s:4:"8b44";s:41:"Classes/ViewHelpers/CObjectViewHelper.php";s:4:"201f";s:41:"Classes/ViewHelpers/CommentViewHelper.php";s:4:"a1e9";s:39:"Classes/ViewHelpers/CountViewHelper.php";s:4:"7b11";s:39:"Classes/ViewHelpers/CycleViewHelper.php";s:4:"3c6d";s:39:"Classes/ViewHelpers/DebugViewHelper.php";s:4:"8590";s:38:"Classes/ViewHelpers/ElseViewHelper.php";s:4:"55f8";s:40:"Classes/ViewHelpers/EscapeViewHelper.php";s:4:"7959";s:47:"Classes/ViewHelpers/FlashMessagesViewHelper.php";s:4:"6dec";s:38:"Classes/ViewHelpers/FormViewHelper.php";s:4:"1176";s:37:"Classes/ViewHelpers/ForViewHelper.php";s:4:"4007";s:44:"Classes/ViewHelpers/GroupedForViewHelper.php";s:4:"dc0a";s:36:"Classes/ViewHelpers/IfViewHelper.php";s:4:"f637";s:39:"Classes/ViewHelpers/ImageViewHelper.php";s:4:"abe1";s:40:"Classes/ViewHelpers/LayoutViewHelper.php";s:4:"eb8f";s:48:"Classes/ViewHelpers/RenderChildrenViewHelper.php";s:4:"d32d";s:53:"Classes/ViewHelpers/RenderFlashMessagesViewHelper.php";s:4:"e492";s:40:"Classes/ViewHelpers/RenderViewHelper.php";s:4:"f3bb";s:41:"Classes/ViewHelpers/SectionViewHelper.php";s:4:"dd14";s:38:"Classes/ViewHelpers/ThenViewHelper.php";s:4:"b5a8";s:43:"Classes/ViewHelpers/TranslateViewHelper.php";s:4:"8012";s:52:"Classes/ViewHelpers/Be/AbstractBackendViewHelper.php";s:4:"33a2";s:46:"Classes/ViewHelpers/Be/ContainerViewHelper.php";s:4:"e868";s:45:"Classes/ViewHelpers/Be/PageInfoViewHelper.php";s:4:"2950";s:45:"Classes/ViewHelpers/Be/PagePathViewHelper.php";s:4:"89a1";s:46:"Classes/ViewHelpers/Be/TableListViewHelper.php";s:4:"03b6";s:48:"Classes/ViewHelpers/Be/Buttons/CshViewHelper.php";s:4:"a9f7";s:49:"Classes/ViewHelpers/Be/Buttons/IconViewHelper.php";s:4:"a235";s:53:"Classes/ViewHelpers/Be/Buttons/ShortcutViewHelper.php";s:4:"d9f1";s:57:"Classes/ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php";s:4:"846a";s:53:"Classes/ViewHelpers/Be/Menus/ActionMenuViewHelper.php";s:4:"292c";s:61:"Classes/ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php";s:4:"497d";s:55:"Classes/ViewHelpers/Be/Security/IfHasRoleViewHelper.php";s:4:"6672";s:56:"Classes/ViewHelpers/Form/AbstractFormFieldViewHelper.php";s:4:"15c2";s:51:"Classes/ViewHelpers/Form/AbstractFormViewHelper.php";s:4:"dbbd";s:47:"Classes/ViewHelpers/Form/CheckboxViewHelper.php";s:4:"0ec2";s:45:"Classes/ViewHelpers/Form/ErrorsViewHelper.php";s:4:"5897";s:45:"Classes/ViewHelpers/Form/HiddenViewHelper.php";s:4:"603e";s:47:"Classes/ViewHelpers/Form/PasswordViewHelper.php";s:4:"da09";s:44:"Classes/ViewHelpers/Form/RadioViewHelper.php";s:4:"562c";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"08aa";s:45:"Classes/ViewHelpers/Form/SubmitViewHelper.php";s:4:"63be";s:47:"Classes/ViewHelpers/Form/TextareaViewHelper.php";s:4:"9727";s:46:"Classes/ViewHelpers/Form/TextboxViewHelper.php";s:4:"9699";s:48:"Classes/ViewHelpers/Form/TextfieldViewHelper.php";s:4:"a583";s:45:"Classes/ViewHelpers/Form/UploadViewHelper.php";s:4:"4e96";s:56:"Classes/ViewHelpers/Form/ValidationResultsViewHelper.php";s:4:"faab";s:57:"Classes/ViewHelpers/Format/AbstractEncodingViewHelper.php";s:4:"ad2e";s:46:"Classes/ViewHelpers/Format/CdataViewHelper.php";s:4:"0984";s:45:"Classes/ViewHelpers/Format/CropViewHelper.php";s:4:"e53f";s:49:"Classes/ViewHelpers/Format/CurrencyViewHelper.php";s:4:"57e4";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"dcf1";s:59:"Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php";s:4:"3c92";s:53:"Classes/ViewHelpers/Format/HtmlentitiesViewHelper.php";s:4:"24ec";s:57:"Classes/ViewHelpers/Format/HtmlspecialcharsViewHelper.php";s:4:"d412";s:45:"Classes/ViewHelpers/Format/HtmlViewHelper.php";s:4:"5e16";s:46:"Classes/ViewHelpers/Format/Nl2brViewHelper.php";s:4:"cc8c";s:47:"Classes/ViewHelpers/Format/NumberViewHelper.php";s:4:"3007";s:48:"Classes/ViewHelpers/Format/PaddingViewHelper.php";s:4:"a97c";s:47:"Classes/ViewHelpers/Format/PrintfViewHelper.php";s:4:"fd57";s:44:"Classes/ViewHelpers/Format/RawViewHelper.php";s:4:"e835";s:50:"Classes/ViewHelpers/Format/StripTagsViewHelper.php";s:4:"dd34";s:50:"Classes/ViewHelpers/Format/UrlencodeViewHelper.php";s:4:"5e9a";s:45:"Classes/ViewHelpers/Link/ActionViewHelper.php";s:4:"1de5";s:44:"Classes/ViewHelpers/Link/EmailViewHelper.php";s:4:"37cd";s:47:"Classes/ViewHelpers/Link/ExternalViewHelper.php";s:4:"a5b2";s:43:"Classes/ViewHelpers/Link/PageViewHelper.php";s:4:"fd31";s:58:"Classes/ViewHelpers/Security/IfAuthenticatedViewHelper.php";s:4:"5569";s:52:"Classes/ViewHelpers/Security/IfHasRoleViewHelper.php";s:4:"c8cc";s:44:"Classes/ViewHelpers/Uri/ActionViewHelper.php";s:4:"4a17";s:43:"Classes/ViewHelpers/Uri/EmailViewHelper.php";s:4:"07f4";s:46:"Classes/ViewHelpers/Uri/ExternalViewHelper.php";s:4:"b64b";s:43:"Classes/ViewHelpers/Uri/ImageViewHelper.php";s:4:"a1bf";s:42:"Classes/ViewHelpers/Uri/PageViewHelper.php";s:4:"6ffd";s:46:"Classes/ViewHelpers/Uri/ResourceViewHelper.php";s:4:"cd03";s:53:"Classes/ViewHelpers/Widget/AutocompleteViewHelper.php";s:4:"2099";s:45:"Classes/ViewHelpers/Widget/LinkViewHelper.php";s:4:"c496";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"1cbb";s:44:"Classes/ViewHelpers/Widget/UriViewHelper.php";s:4:"f9f0";s:64:"Classes/ViewHelpers/Widget/Controller/AutocompleteController.php";s:4:"ec7c";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"ebfb";s:34:"Configuration/TypoScript/setup.txt";s:4:"430a";s:70:"Resources/Private/Templates/ViewHelpers/Widget/Autocomplete/Index.html";s:4:"b955";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"7ffe";s:43:"Tests/Unit/Core/Fixtures/TestViewHelper.php";s:4:"253f";s:44:"Tests/Unit/Core/Fixtures/TestViewHelper2.php";s:4:"f08c";s:43:"Tests/Unit/Core/Parser/ParsingStateTest.php";s:4:"f0b2";s:52:"Tests/Unit/Core/Parser/TemplateParserPatternTest.php";s:4:"02ef";s:45:"Tests/Unit/Core/Parser/TemplateParserTest.php";s:4:"9e32";s:66:"Tests/Unit/Core/Parser/Fixtures/ChildNodeAccessFacetViewHelper.php";s:4:"72a1";s:60:"Tests/Unit/Core/Parser/Fixtures/PostParseFacetViewHelper.php";s:4:"d641";s:79:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture01-shorthand-split.php";s:4:"ea3a";s:74:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture01-shorthand.html";s:4:"e949";s:69:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture06-split.php";s:4:"8d2c";s:64:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture06.html";s:4:"4379";s:69:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture14-split.php";s:4:"bd4b";s:64:"Tests/Unit/Core/Parser/Fixtures/TemplateParserTestFixture14.html";s:4:"1ec8";s:49:"Tests/Unit/Core/Parser/Interceptor/EscapeTest.php";s:4:"ab9b";s:54:"Tests/Unit/Core/Parser/SyntaxTree/AbstractNodeTest.php";s:4:"e6dc";s:53:"Tests/Unit/Core/Parser/SyntaxTree/BooleanNodeTest.php";s:4:"0afc";s:50:"Tests/Unit/Core/Parser/SyntaxTree/TextNodeTest.php";s:4:"1582";s:56:"Tests/Unit/Core/Parser/SyntaxTree/ViewHelperNodeTest.php";s:4:"8b11";s:50:"Tests/Unit/Core/Rendering/RenderingContextTest.php";s:4:"8fb7";s:62:"Tests/Unit/Core/ViewHelper/AbstractConditionViewHelperTest.php";s:4:"4bff";s:61:"Tests/Unit/Core/ViewHelper/AbstractTagBasedViewHelperTest.php";s:4:"1f16";s:53:"Tests/Unit/Core/ViewHelper/AbstractViewHelperTest.php";s:4:"83fa";s:53:"Tests/Unit/Core/ViewHelper/ArgumentDefinitionTest.php";s:4:"08fd";s:45:"Tests/Unit/Core/ViewHelper/TagBuilderTest.php";s:4:"e598";s:60:"Tests/Unit/Core/ViewHelper/TemplateVariableContainerTest.php";s:4:"c346";s:62:"Tests/Unit/Core/ViewHelper/ViewHelperVariableContainerTest.php";s:4:"def2";s:55:"Tests/Unit/Core/Widget/AbstractWidgetControllerTest.php";s:4:"1aa5";s:55:"Tests/Unit/Core/Widget/AbstractWidgetViewHelperTest.php";s:4:"7782";s:54:"Tests/Unit/Core/Widget/AjaxWidgetContextHolderTest.php";s:4:"decf";s:44:"Tests/Unit/Core/Widget/WidgetContextTest.php";s:4:"d718";s:51:"Tests/Unit/Core/Widget/WidgetRequestBuilderTest.php";s:4:"aa07";s:51:"Tests/Unit/Core/Widget/WidgetRequestHandlerTest.php";s:4:"4421";s:44:"Tests/Unit/Core/Widget/WidgetRequestTest.php";s:4:"75ba";s:44:"Tests/Unit/View/AbstractTemplateViewTest.php";s:4:"b602";s:38:"Tests/Unit/View/StandaloneViewTest.php";s:4:"e62c";s:36:"Tests/Unit/View/TemplateViewTest.php";s:4:"4799";s:38:"Tests/Unit/View/Fixtures/LayoutFixture";s:4:"85d8";s:43:"Tests/Unit/View/Fixtures/LayoutFixture.html";s:4:"5630";s:42:"Tests/Unit/View/Fixtures/LayoutFixture.xml";s:4:"85be";s:51:"Tests/Unit/View/Fixtures/StandaloneViewFixture.html";s:4:"8952";s:48:"Tests/Unit/View/Fixtures/TemplateViewFixture.php";s:4:"aa68";s:56:"Tests/Unit/View/Fixtures/TemplateViewSectionFixture.html";s:4:"5c65";s:54:"Tests/Unit/View/Fixtures/TransparentSyntaxTreeNode.php";s:4:"19ed";s:53:"Tests/Unit/View/Fixtures/UnparsedTemplateFixture.html";s:4:"59dd";s:46:"Tests/Unit/ViewHelpers/AliasViewHelperTest.php";s:4:"739a";s:45:"Tests/Unit/ViewHelpers/BaseViewHelperTest.php";s:4:"11ae";s:46:"Tests/Unit/ViewHelpers/CountViewHelperTest.php";s:4:"8015";s:46:"Tests/Unit/ViewHelpers/CycleViewHelperTest.php";s:4:"e1ca";s:45:"Tests/Unit/ViewHelpers/ElseViewHelperTest.php";s:4:"38c7";s:45:"Tests/Unit/ViewHelpers/FormViewHelperTest.php";s:4:"8da6";s:44:"Tests/Unit/ViewHelpers/ForViewHelperTest.php";s:4:"fb76";s:51:"Tests/Unit/ViewHelpers/GroupedForViewHelperTest.php";s:4:"61dc";s:43:"Tests/Unit/ViewHelpers/IfViewHelperTest.php";s:4:"d6dd";s:55:"Tests/Unit/ViewHelpers/RenderChildrenViewHelperTest.php";s:4:"570e";s:47:"Tests/Unit/ViewHelpers/RenderViewHelperTest.php";s:4:"3925";s:45:"Tests/Unit/ViewHelpers/ThenViewHelperTest.php";s:4:"4ca5";s:49:"Tests/Unit/ViewHelpers/ViewHelperBaseTestcase.php";s:4:"aa27";s:59:"Tests/Unit/ViewHelpers/Be/IfAuthenticatedViewHelperTest.php";s:4:"226f";s:53:"Tests/Unit/ViewHelpers/Be/IfHasRoleViewHelperTest.php";s:4:"3ba5";s:60:"Tests/Unit/ViewHelpers/Fixtures/ConstraintSyntaxTreeNode.php";s:4:"1b31";s:46:"Tests/Unit/ViewHelpers/Fixtures/IfFixture.html";s:4:"2e12";s:54:"Tests/Unit/ViewHelpers/Fixtures/IfThenElseFixture.html";s:4:"d826";s:63:"Tests/Unit/ViewHelpers/Form/AbstractFormFieldViewHelperTest.php";s:4:"205f";s:58:"Tests/Unit/ViewHelpers/Form/AbstractFormViewHelperTest.php";s:4:"842b";s:54:"Tests/Unit/ViewHelpers/Form/CheckboxViewHelperTest.php";s:4:"34dc";s:63:"Tests/Unit/ViewHelpers/Form/FormFieldViewHelperBaseTestcase.php";s:4:"56a6";s:52:"Tests/Unit/ViewHelpers/Form/HiddenViewHelperTest.php";s:4:"caea";s:54:"Tests/Unit/ViewHelpers/Form/PasswordViewHelperTest.php";s:4:"4596";s:51:"Tests/Unit/ViewHelpers/Form/RadioViewHelperTest.php";s:4:"e93a";s:52:"Tests/Unit/ViewHelpers/Form/SelectViewHelperTest.php";s:4:"d203";s:52:"Tests/Unit/ViewHelpers/Form/SubmitViewHelperTest.php";s:4:"8f4d";s:54:"Tests/Unit/ViewHelpers/Form/TextareaViewHelperTest.php";s:4:"f077";s:53:"Tests/Unit/ViewHelpers/Form/TextboxViewHelperTest.php";s:4:"f23f";s:52:"Tests/Unit/ViewHelpers/Form/UploadViewHelperTest.php";s:4:"e967";s:60:"Tests/Unit/ViewHelpers/Form/Fixtures/EmptySyntaxTreeNode.php";s:4:"449d";s:64:"Tests/Unit/ViewHelpers/Form/Fixtures/Fixture_UserDomainClass.php";s:4:"6a7c";s:52:"Tests/Unit/ViewHelpers/Format/CropViewHelperTest.php";s:4:"3b2e";s:56:"Tests/Unit/ViewHelpers/Format/CurrencyViewHelperTest.php";s:4:"533e";s:52:"Tests/Unit/ViewHelpers/Format/DateViewHelperTest.php";s:4:"6bc7";s:66:"Tests/Unit/ViewHelpers/Format/HtmlentitiesDecodeViewHelperTest.php";s:4:"6e44";s:60:"Tests/Unit/ViewHelpers/Format/HtmlentitiesViewHelperTest.php";s:4:"1e49";s:64:"Tests/Unit/ViewHelpers/Format/HtmlspecialcharsViewHelperTest.php";s:4:"4adc";s:53:"Tests/Unit/ViewHelpers/Format/Nl2brViewHelperTest.php";s:4:"be0d";s:54:"Tests/Unit/ViewHelpers/Format/NumberViewHelperTest.php";s:4:"c18b";s:55:"Tests/Unit/ViewHelpers/Format/PaddingViewHelperTest.php";s:4:"621b";s:54:"Tests/Unit/ViewHelpers/Format/PrintfViewHelperTest.php";s:4:"1834";s:51:"Tests/Unit/ViewHelpers/Format/RawViewHelperTest.php";s:4:"5c83";s:57:"Tests/Unit/ViewHelpers/Format/StripTagsViewHelperTest.php";s:4:"0cd3";s:57:"Tests/Unit/ViewHelpers/Format/UrlencodeViewHelperTest.php";s:4:"bc8f";s:51:"Tests/Unit/ViewHelpers/Link/EmailViewHelperTest.php";s:4:"2dfd";s:54:"Tests/Unit/ViewHelpers/Link/ExternalViewHelperTest.php";s:4:"62f1";s:65:"Tests/Unit/ViewHelpers/Security/IfAuthenticatedViewHelperTest.php";s:4:"61f0";s:59:"Tests/Unit/ViewHelpers/Security/IfHasRoleViewHelperTest.php";s:4:"f0d4";s:50:"Tests/Unit/ViewHelpers/Uri/EmailViewHelperTest.php";s:4:"8760";s:53:"Tests/Unit/ViewHelpers/Uri/ExternalViewHelperTest.php";s:4:"b998";}',
	'suggests' => array(
	),
);

?>