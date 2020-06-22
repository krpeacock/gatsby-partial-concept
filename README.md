# Gatsby Partial Output Concept

In a concept for use cases where there are compelling business needs to stick with an existing PHP, Rails, or other server architecture that is responsible for delivering a mixed-React frontend, it would be nice to use Gatsby as a tool for generating template partials with SSR React.

In this example, I have set up index.php to have a conditional include for a partial template that includes a root tag + a development script in `includes/development.php`.

A concept for a production asset would be at `build/hypothetical.php`, containing the same asset pre-rendered using Gatsby.
