<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f62e181a42045c5974c12b349c16bfe
{
    public static $files = array (
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
            'Ramsey\\Collection\\' => 18,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Ramsey\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/collection/src',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Brick\\Math\\BigDecimal' => __DIR__ . '/..' . '/brick/math/src/BigDecimal.php',
        'Brick\\Math\\BigInteger' => __DIR__ . '/..' . '/brick/math/src/BigInteger.php',
        'Brick\\Math\\BigNumber' => __DIR__ . '/..' . '/brick/math/src/BigNumber.php',
        'Brick\\Math\\BigRational' => __DIR__ . '/..' . '/brick/math/src/BigRational.php',
        'Brick\\Math\\Exception\\DivisionByZeroException' => __DIR__ . '/..' . '/brick/math/src/Exception/DivisionByZeroException.php',
        'Brick\\Math\\Exception\\IntegerOverflowException' => __DIR__ . '/..' . '/brick/math/src/Exception/IntegerOverflowException.php',
        'Brick\\Math\\Exception\\MathException' => __DIR__ . '/..' . '/brick/math/src/Exception/MathException.php',
        'Brick\\Math\\Exception\\NegativeNumberException' => __DIR__ . '/..' . '/brick/math/src/Exception/NegativeNumberException.php',
        'Brick\\Math\\Exception\\NumberFormatException' => __DIR__ . '/..' . '/brick/math/src/Exception/NumberFormatException.php',
        'Brick\\Math\\Exception\\RoundingNecessaryException' => __DIR__ . '/..' . '/brick/math/src/Exception/RoundingNecessaryException.php',
        'Brick\\Math\\Internal\\Calculator' => __DIR__ . '/..' . '/brick/math/src/Internal/Calculator.php',
        'Brick\\Math\\Internal\\Calculator\\BcMathCalculator' => __DIR__ . '/..' . '/brick/math/src/Internal/Calculator/BcMathCalculator.php',
        'Brick\\Math\\Internal\\Calculator\\GmpCalculator' => __DIR__ . '/..' . '/brick/math/src/Internal/Calculator/GmpCalculator.php',
        'Brick\\Math\\Internal\\Calculator\\NativeCalculator' => __DIR__ . '/..' . '/brick/math/src/Internal/Calculator/NativeCalculator.php',
        'Brick\\Math\\RoundingMode' => __DIR__ . '/..' . '/brick/math/src/RoundingMode.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Loaders\\RobotLoader' => __DIR__ . '/..' . '/nette/robot-loader/src/RobotLoader/RobotLoader.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileInfo' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileInfo.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/utils/src/Utils/Finder.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageColor' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageColor.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ImageType' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageType.php',
        'Nette\\Utils\\Iterables' => __DIR__ . '/..' . '/nette/utils/src/Utils/Iterables.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\ReflectionMethod' => __DIR__ . '/..' . '/nette/utils/src/Utils/ReflectionMethod.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'Ramsey\\Collection\\AbstractArray' => __DIR__ . '/..' . '/ramsey/collection/src/AbstractArray.php',
        'Ramsey\\Collection\\AbstractCollection' => __DIR__ . '/..' . '/ramsey/collection/src/AbstractCollection.php',
        'Ramsey\\Collection\\AbstractSet' => __DIR__ . '/..' . '/ramsey/collection/src/AbstractSet.php',
        'Ramsey\\Collection\\ArrayInterface' => __DIR__ . '/..' . '/ramsey/collection/src/ArrayInterface.php',
        'Ramsey\\Collection\\Collection' => __DIR__ . '/..' . '/ramsey/collection/src/Collection.php',
        'Ramsey\\Collection\\CollectionInterface' => __DIR__ . '/..' . '/ramsey/collection/src/CollectionInterface.php',
        'Ramsey\\Collection\\DoubleEndedQueue' => __DIR__ . '/..' . '/ramsey/collection/src/DoubleEndedQueue.php',
        'Ramsey\\Collection\\DoubleEndedQueueInterface' => __DIR__ . '/..' . '/ramsey/collection/src/DoubleEndedQueueInterface.php',
        'Ramsey\\Collection\\Exception\\CollectionException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/CollectionException.php',
        'Ramsey\\Collection\\Exception\\CollectionMismatchException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/CollectionMismatchException.php',
        'Ramsey\\Collection\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/InvalidArgumentException.php',
        'Ramsey\\Collection\\Exception\\InvalidPropertyOrMethod' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/InvalidPropertyOrMethod.php',
        'Ramsey\\Collection\\Exception\\NoSuchElementException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/NoSuchElementException.php',
        'Ramsey\\Collection\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/OutOfBoundsException.php',
        'Ramsey\\Collection\\Exception\\UnsupportedOperationException' => __DIR__ . '/..' . '/ramsey/collection/src/Exception/UnsupportedOperationException.php',
        'Ramsey\\Collection\\GenericArray' => __DIR__ . '/..' . '/ramsey/collection/src/GenericArray.php',
        'Ramsey\\Collection\\Map\\AbstractMap' => __DIR__ . '/..' . '/ramsey/collection/src/Map/AbstractMap.php',
        'Ramsey\\Collection\\Map\\AbstractTypedMap' => __DIR__ . '/..' . '/ramsey/collection/src/Map/AbstractTypedMap.php',
        'Ramsey\\Collection\\Map\\AssociativeArrayMap' => __DIR__ . '/..' . '/ramsey/collection/src/Map/AssociativeArrayMap.php',
        'Ramsey\\Collection\\Map\\MapInterface' => __DIR__ . '/..' . '/ramsey/collection/src/Map/MapInterface.php',
        'Ramsey\\Collection\\Map\\NamedParameterMap' => __DIR__ . '/..' . '/ramsey/collection/src/Map/NamedParameterMap.php',
        'Ramsey\\Collection\\Map\\TypedMap' => __DIR__ . '/..' . '/ramsey/collection/src/Map/TypedMap.php',
        'Ramsey\\Collection\\Map\\TypedMapInterface' => __DIR__ . '/..' . '/ramsey/collection/src/Map/TypedMapInterface.php',
        'Ramsey\\Collection\\Queue' => __DIR__ . '/..' . '/ramsey/collection/src/Queue.php',
        'Ramsey\\Collection\\QueueInterface' => __DIR__ . '/..' . '/ramsey/collection/src/QueueInterface.php',
        'Ramsey\\Collection\\Set' => __DIR__ . '/..' . '/ramsey/collection/src/Set.php',
        'Ramsey\\Collection\\Sort' => __DIR__ . '/..' . '/ramsey/collection/src/Sort.php',
        'Ramsey\\Collection\\Tool\\TypeTrait' => __DIR__ . '/..' . '/ramsey/collection/src/Tool/TypeTrait.php',
        'Ramsey\\Collection\\Tool\\ValueExtractorTrait' => __DIR__ . '/..' . '/ramsey/collection/src/Tool/ValueExtractorTrait.php',
        'Ramsey\\Collection\\Tool\\ValueToStringTrait' => __DIR__ . '/..' . '/ramsey/collection/src/Tool/ValueToStringTrait.php',
        'Ramsey\\Uuid\\BinaryUtils' => __DIR__ . '/..' . '/ramsey/uuid/src/BinaryUtils.php',
        'Ramsey\\Uuid\\Builder\\BuilderCollection' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/BuilderCollection.php',
        'Ramsey\\Uuid\\Builder\\DefaultUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DefaultUuidBuilder.php',
        'Ramsey\\Uuid\\Builder\\DegradedUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DegradedUuidBuilder.php',
        'Ramsey\\Uuid\\Builder\\FallbackBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/FallbackBuilder.php',
        'Ramsey\\Uuid\\Builder\\UuidBuilderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/UuidBuilderInterface.php',
        'Ramsey\\Uuid\\Codec\\CodecInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/CodecInterface.php',
        'Ramsey\\Uuid\\Codec\\GuidStringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/GuidStringCodec.php',
        'Ramsey\\Uuid\\Codec\\OrderedTimeCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/OrderedTimeCodec.php',
        'Ramsey\\Uuid\\Codec\\StringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/StringCodec.php',
        'Ramsey\\Uuid\\Codec\\TimestampFirstCombCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/TimestampFirstCombCodec.php',
        'Ramsey\\Uuid\\Codec\\TimestampLastCombCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/TimestampLastCombCodec.php',
        'Ramsey\\Uuid\\Converter\\NumberConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/NumberConverterInterface.php',
        'Ramsey\\Uuid\\Converter\\Number\\BigNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/BigNumberConverter.php',
        'Ramsey\\Uuid\\Converter\\Number\\DegradedNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/DegradedNumberConverter.php',
        'Ramsey\\Uuid\\Converter\\Number\\GenericNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/GenericNumberConverter.php',
        'Ramsey\\Uuid\\Converter\\TimeConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/TimeConverterInterface.php',
        'Ramsey\\Uuid\\Converter\\Time\\BigNumberTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/BigNumberTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\DegradedTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/DegradedTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\GenericTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/GenericTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\PhpTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/PhpTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\UnixTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/UnixTimeConverter.php',
        'Ramsey\\Uuid\\DegradedUuid' => __DIR__ . '/..' . '/ramsey/uuid/src/DegradedUuid.php',
        'Ramsey\\Uuid\\DeprecatedUuidInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/DeprecatedUuidInterface.php',
        'Ramsey\\Uuid\\DeprecatedUuidMethodsTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/DeprecatedUuidMethodsTrait.php',
        'Ramsey\\Uuid\\Exception\\BuilderNotFoundException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/BuilderNotFoundException.php',
        'Ramsey\\Uuid\\Exception\\DateTimeException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/DateTimeException.php',
        'Ramsey\\Uuid\\Exception\\DceSecurityException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/DceSecurityException.php',
        'Ramsey\\Uuid\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/InvalidArgumentException.php',
        'Ramsey\\Uuid\\Exception\\InvalidBytesException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/InvalidBytesException.php',
        'Ramsey\\Uuid\\Exception\\InvalidUuidStringException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/InvalidUuidStringException.php',
        'Ramsey\\Uuid\\Exception\\NameException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/NameException.php',
        'Ramsey\\Uuid\\Exception\\NodeException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/NodeException.php',
        'Ramsey\\Uuid\\Exception\\RandomSourceException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/RandomSourceException.php',
        'Ramsey\\Uuid\\Exception\\TimeSourceException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/TimeSourceException.php',
        'Ramsey\\Uuid\\Exception\\UnableToBuildUuidException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnableToBuildUuidException.php',
        'Ramsey\\Uuid\\Exception\\UnsupportedOperationException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnsupportedOperationException.php',
        'Ramsey\\Uuid\\Exception\\UuidExceptionInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UuidExceptionInterface.php',
        'Ramsey\\Uuid\\FeatureSet' => __DIR__ . '/..' . '/ramsey/uuid/src/FeatureSet.php',
        'Ramsey\\Uuid\\Fields\\FieldsInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Fields/FieldsInterface.php',
        'Ramsey\\Uuid\\Fields\\SerializableFieldsTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Fields/SerializableFieldsTrait.php',
        'Ramsey\\Uuid\\Generator\\CombGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/CombGenerator.php',
        'Ramsey\\Uuid\\Generator\\DceSecurityGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DceSecurityGenerator.php',
        'Ramsey\\Uuid\\Generator\\DceSecurityGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DceSecurityGeneratorInterface.php',
        'Ramsey\\Uuid\\Generator\\DefaultNameGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DefaultNameGenerator.php',
        'Ramsey\\Uuid\\Generator\\DefaultTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DefaultTimeGenerator.php',
        'Ramsey\\Uuid\\Generator\\NameGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/NameGeneratorFactory.php',
        'Ramsey\\Uuid\\Generator\\NameGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/NameGeneratorInterface.php',
        'Ramsey\\Uuid\\Generator\\PeclUuidNameGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidNameGenerator.php',
        'Ramsey\\Uuid\\Generator\\PeclUuidRandomGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidRandomGenerator.php',
        'Ramsey\\Uuid\\Generator\\PeclUuidTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidTimeGenerator.php',
        'Ramsey\\Uuid\\Generator\\RandomBytesGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomBytesGenerator.php',
        'Ramsey\\Uuid\\Generator\\RandomGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorFactory.php',
        'Ramsey\\Uuid\\Generator\\RandomGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorInterface.php',
        'Ramsey\\Uuid\\Generator\\RandomLibAdapter' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomLibAdapter.php',
        'Ramsey\\Uuid\\Generator\\TimeGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorFactory.php',
        'Ramsey\\Uuid\\Generator\\TimeGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorInterface.php',
        'Ramsey\\Uuid\\Generator\\UnixTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/UnixTimeGenerator.php',
        'Ramsey\\Uuid\\Guid\\Fields' => __DIR__ . '/..' . '/ramsey/uuid/src/Guid/Fields.php',
        'Ramsey\\Uuid\\Guid\\Guid' => __DIR__ . '/..' . '/ramsey/uuid/src/Guid/Guid.php',
        'Ramsey\\Uuid\\Guid\\GuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Guid/GuidBuilder.php',
        'Ramsey\\Uuid\\Lazy\\LazyUuidFromString' => __DIR__ . '/..' . '/ramsey/uuid/src/Lazy/LazyUuidFromString.php',
        'Ramsey\\Uuid\\Math\\BrickMathCalculator' => __DIR__ . '/..' . '/ramsey/uuid/src/Math/BrickMathCalculator.php',
        'Ramsey\\Uuid\\Math\\CalculatorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Math/CalculatorInterface.php',
        'Ramsey\\Uuid\\Math\\RoundingMode' => __DIR__ . '/..' . '/ramsey/uuid/src/Math/RoundingMode.php',
        'Ramsey\\Uuid\\Nonstandard\\Fields' => __DIR__ . '/..' . '/ramsey/uuid/src/Nonstandard/Fields.php',
        'Ramsey\\Uuid\\Nonstandard\\Uuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Nonstandard/Uuid.php',
        'Ramsey\\Uuid\\Nonstandard\\UuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Nonstandard/UuidBuilder.php',
        'Ramsey\\Uuid\\Nonstandard\\UuidV6' => __DIR__ . '/..' . '/ramsey/uuid/src/Nonstandard/UuidV6.php',
        'Ramsey\\Uuid\\Provider\\DceSecurityProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/DceSecurityProviderInterface.php',
        'Ramsey\\Uuid\\Provider\\Dce\\SystemDceSecurityProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Dce/SystemDceSecurityProvider.php',
        'Ramsey\\Uuid\\Provider\\NodeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/NodeProviderInterface.php',
        'Ramsey\\Uuid\\Provider\\Node\\FallbackNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/FallbackNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\Node\\NodeProviderCollection' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/NodeProviderCollection.php',
        'Ramsey\\Uuid\\Provider\\Node\\RandomNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/RandomNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\Node\\StaticNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/StaticNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\Node\\SystemNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/SystemNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\TimeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/TimeProviderInterface.php',
        'Ramsey\\Uuid\\Provider\\Time\\FixedTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/FixedTimeProvider.php',
        'Ramsey\\Uuid\\Provider\\Time\\SystemTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/SystemTimeProvider.php',
        'Ramsey\\Uuid\\Rfc4122\\Fields' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/Fields.php',
        'Ramsey\\Uuid\\Rfc4122\\FieldsInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/FieldsInterface.php',
        'Ramsey\\Uuid\\Rfc4122\\MaxTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/MaxTrait.php',
        'Ramsey\\Uuid\\Rfc4122\\MaxUuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/MaxUuid.php',
        'Ramsey\\Uuid\\Rfc4122\\NilTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/NilTrait.php',
        'Ramsey\\Uuid\\Rfc4122\\NilUuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/NilUuid.php',
        'Ramsey\\Uuid\\Rfc4122\\TimeTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/TimeTrait.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidBuilder.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidInterface.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV1' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV1.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV2' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV2.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV3' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV3.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV4' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV4.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV5' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV5.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV6' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV6.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV7' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV7.php',
        'Ramsey\\Uuid\\Rfc4122\\UuidV8' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/UuidV8.php',
        'Ramsey\\Uuid\\Rfc4122\\Validator' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/Validator.php',
        'Ramsey\\Uuid\\Rfc4122\\VariantTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/VariantTrait.php',
        'Ramsey\\Uuid\\Rfc4122\\VersionTrait' => __DIR__ . '/..' . '/ramsey/uuid/src/Rfc4122/VersionTrait.php',
        'Ramsey\\Uuid\\Type\\Decimal' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/Decimal.php',
        'Ramsey\\Uuid\\Type\\Hexadecimal' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/Hexadecimal.php',
        'Ramsey\\Uuid\\Type\\Integer' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/Integer.php',
        'Ramsey\\Uuid\\Type\\NumberInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/NumberInterface.php',
        'Ramsey\\Uuid\\Type\\Time' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/Time.php',
        'Ramsey\\Uuid\\Type\\TypeInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Type/TypeInterface.php',
        'Ramsey\\Uuid\\Uuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Uuid.php',
        'Ramsey\\Uuid\\UuidFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactory.php',
        'Ramsey\\Uuid\\UuidFactoryInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactoryInterface.php',
        'Ramsey\\Uuid\\UuidInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidInterface.php',
        'Ramsey\\Uuid\\Validator\\GenericValidator' => __DIR__ . '/..' . '/ramsey/uuid/src/Validator/GenericValidator.php',
        'Ramsey\\Uuid\\Validator\\ValidatorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Validator/ValidatorInterface.php',
        'app\\Paymentgateway\\Notification\\Email' => __DIR__ . '/../..' . '/app/Paymentgateway/Notification/Email.php',
        'app\\Paymentgateway\\paddle\\CustomerProfile' => __DIR__ . '/../..' . '/app/Paymentgateway/paddle/CustomerProfile.php',
        'app\\Paymentgateway\\paddle\\Transaction' => __DIR__ . '/../..' . '/app/Paymentgateway/paddle/Transaction.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f62e181a42045c5974c12b349c16bfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f62e181a42045c5974c12b349c16bfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f62e181a42045c5974c12b349c16bfe::$classMap;

        }, null, ClassLoader::class);
    }
}
