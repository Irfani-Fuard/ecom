<?php
class Auction {
    private $itemId;
    private $currentPrice;
    private $endTime;
    private $winner;
    
    public function __construct($itemId, $initialPrice, $endTime) {
        $this->itemId = $itemId;
        $this->currentPrice = $initialPrice;
        $this->endTime = strtotime($endTime);
        $this->winner = null;
    }
    
    public function placeBid($bidAmount, $bidder) {
        // Check if the auction has ended
        if (time() >= $this->endTime) {
            return "Auction has ended.";
        }
        
        // Check if the bid amount is higher than the current price
        if ($bidAmount <= $this->currentPrice) {
            return "Your bid must be higher than the current price.";
        }
        
        // Update the current price and set the new winner
        $this->currentPrice = $bidAmount;
        $this->winner = $bidder;
        
        return "Bid placed successfully.";
    }
    
    public function getWinner() {
        return $this->winner;
    }
    
    public function getCurrentPrice() {
        return $this->currentPrice;
    }
    
    public function hasEnded() {
        return time() >= $this->endTime;
    }
}

// Example usage
$auction = new Auction(1, 100, '2023-09-01 12:00:00');
echo $auction->placeBid(120, 'User1') . "\n";
echo $auction->placeBid(110, 'User2') . "\n";

// Check if the auction has ended
if ($auction->hasEnded()) {
    echo "Auction has ended.\n";
    echo "Winner: " . $auction->getWinner() . "\n";
} else {
    echo "Auction is still active.\n";
}

$currentTimestamp = time();

// Query the database to find auctions that have ended
$query = "SELECT * FROM auctions WHERE end_time <= $currentTimestamp AND status = 'active'";
// Execute the query and fetch the results

foreach ($results as $auction) {
    // Close the auction and update the status
    $auctionId = $auction['id'];
    $winner = $auction['winner'];
    
    // Update the auction status to 'closed' and set the winner in the database
    // Optionally, you can send notifications to the winner and the seller
    
    // Example:
    // UPDATE auctions SET status = 'closed', winner = '$winner' WHERE id = $auctionId
}


?>
