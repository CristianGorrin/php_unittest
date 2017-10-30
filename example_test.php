<?php
require __DIR__ . '/unittest.php';
use ccg\unittesting\ITest;
use ccg\unittesting\Assert;
use ccg\unittesting\UnitTest;

class TestClass implements ITest {
    protected $test_name_identifier;

    public function __construct($identifier) {
        $this->test_name_identifier = $identifier;
    }

    #region ccg\unittesting\ITest Members

    /**
     * Summary of GetIdentifier
     * The tests name of this instances
     *
     * @return string
     */
    function GetIdentifier() {
        return $this->test_name_identifier;
    }

    #endregion

	public function Assert() {
        Assert::AreEqual(true, true, 'AreEqual');
        Assert::AreNotEqual(true, false, 'AreNotEqual');
        Assert::IsFalse(false, 'IsFalse');
        Assert::IsTrue(true, 'IsTrue');
        Assert::IsInstanceOfType($this, get_class($this), 'IsInstanceOfType');
        Assert::IsNull(null, 'IsNull');
    }
}

$obj = new TestClass('New_test');
UnitTest::RegisterTest($obj);
