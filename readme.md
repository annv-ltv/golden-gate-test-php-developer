# Requirement
PHP version >= 7
# How to run?
Open terminal and type: ```php index.php```
# Directory structure
- Our service source code is located in the packages/golden-gate/amazon-shipping-service/src/
- It will be autoloaded by composer
    - ```Classes```: Contains main classes
        - ```Order.php```: Add products and calculate gross price
        - ```Product.php```: 
    - ```Contracts```: Contains interfaces
    - ```ShippingFees```: Contains formula classes to calculate fee for product
        - ```WeightDimension.php```: calculate fee based on weight or dimension
        - ```WeightDimensionDiamond.php```: calculate fee based on weight or dimension or diamond
        - ...
    - ```TypeShipingFees```: Contains classes calculate fee by type:
        - ```BaseShippingFeeType.php```: is abstract base class
        - ```DimensionShippingFee.php```: calculate fee by dimension
        - ```WeightShippingFee.php```: calculate fee by weight
        - ...
# How it works?
    1. Please see demo in index.php file
    2. Initialize the Product object with necessary information and ShipingFees object
    3. Initialize the Order object and add products via addProducts or addProduct method
    4. Show gross price of order via calGrossPrice method
# Scalability
    1. We used DI to inject the ShippingFees object to Product via contructor method (shipping_fee are flexible). Product does not depend on a specific class, it depends on the interface
    2. ShippingFees can optionally select 1 or more TypeShipingFees
    
    => We can create unlimited ShippingFees and TypeShipingFees to calculate fees without affecting the existing source code.