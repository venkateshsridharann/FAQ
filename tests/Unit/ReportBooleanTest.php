<?php
namespace Tests\Unit;
use App\Question;
use App\Questions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ReportBooleanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $questions = Question::inRandomOrder()->first();
        $report= (boolean)$questions->report;
        $this->assertInternalType('boolean', $report);
    }
}