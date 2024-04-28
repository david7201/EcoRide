
<?php

require_once 'breakdown.php';

// Mocking the database connection
class MockDBConnection {
    public function prepare($sql) {
        return new MockStatement();
    }
}

// Mocking the PDOStatement
class MockStatement {
    public function execute($params) {
        // Simulating successful execution
        return true;
    }
}

// Test cases for the Breakdown class
class BreakdownTest extends \PHPUnit\Framework\TestCase {
    public function testInsertBreakdown() {
        // Create a mock database connection
        $mockConnection = new MockDBConnection();

        // Create an instance of the Breakdown class with the mock connection
        $breakdown = new Breakdown($mockConnection, null);

        // Set sample data
        $breakdown->setName('John Doe');
        $breakdown->setEmail('john@example.com');
        $breakdown->setMessage('Test message');

        // Call the insertBreakdown method
        $result = $breakdown->insertBreakdown();

        // Assert that the method returns true (indicating successful insertion)
        $this->assertTrue($result);
    }

    public function testAggregateData() {
        // Create a mock employee object
        $mockEmployee = $this->getMockBuilder(Employee::class)
                             ->disableOriginalConstructor()
                             ->getMock();

        // Stub the methods to return sample data
        $mockEmployee->method('getFirstName')->willReturn('John');
        $mockEmployee->method('getLastName')->willReturn('Doe');
        $mockEmployee->method('getAge')->willReturn(30);
        $mockEmployee->method('getEmail')->willReturn('john@example.com');
        $mockEmployee->method('getContactno')->willReturn('1234567890');
        $mockEmployee->method('getLocation')->willReturn('New York');

        // Create an instance of the Breakdown class with the mock employee
        $breakdown = new Breakdown(null, $mockEmployee);

        // Set sample data
        $breakdown->setName('John Doe');
        $breakdown->setEmail('john@example.com');
        $breakdown->setMessage('Test message');

        // Call the aggregateData method
        $result = $breakdown->aggregateData();

        // Assert that the aggregated data matches the expected structure
        $expectedData = [
            'employee' => [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'age' => 30,
                'email' => 'john@example.com',
                'contactno' => '1234567890',
                'location' => 'New York'
            ],
            'breakdown_towing' => [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'message' => 'Test message'
            ]
        ];
        $this->assertEquals($expectedData, $result);
    }
}
